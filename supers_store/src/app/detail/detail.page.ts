import { Component, OnInit,ViewChild } from '@angular/core';
import { ServerService } from '../service/server.service';
import { NavController,Platform,LoadingController,IonSlides,Events,AlertController,ToastController } from '@ionic/angular';

@Component({
  selector: 'app-detail',
  templateUrl: 'detail.page.html',
  styleUrls: ['detail.page.scss'],
})
export class DetailPage {
	
  data:any;
  text:any;
  status:number;
  constructor(public toastController: ToastController,public alertController: AlertController,public server : ServerService,private nav: NavController,public events: Events,public loadingController : LoadingController)
  {
      this.data 	= JSON.parse(localStorage.getItem('odata'));
      this.status	= this.data.status;
  }

  ionViewWillEnter()
  {
    if(localStorage.getItem('app_text') && localStorage.getItem('app_text') != undefined)
    {
      this.text = JSON.parse(localStorage.getItem('app_text'));
    }
  }

  ngOnInit()
  {
    
  }

  async presentAlertConfirm(id,status) {
    const alert = await this.alertController.create({
      header: 'Xác nhận!',
      message: 'Bạn có chắc?',
      mode:'ios',
      buttons: [
        {
          text: 'Huỷ',
          role: 'cancel',
          cssClass: 'secondary',
          handler: (blah) => {
            console.log('Xác nhận huỷ: blah');
          }
        }, {
          text: 'Có',
          handler: () => {
            
            this.startRide(id,status);

          }
        }
      ]
    });

    await alert.present();
  }

  async startRide(id,type)
  {
    const loading = await this.loadingController.create({
      message: 'Vui lòng đợi...',
    });
    await loading.present();

    this.server.orderProcess(id,type).subscribe((response:any) => {
    
    if(type == 5)
    {
    	this.presentToast("Xác nhận Đơn hàng thành công.");

    	this.nav.navigateRoot('home');
    }
    else if(type == 2)
    {
      this.presentToast("Huỷ Đơn hàng thành công.");

      this.nav.navigateRoot('home');
    }
    else
    {
    	this.presentToast("Cập nhật trạng thái đơn hàng thành công.");
    }

    this.status = response.data;

    loading.dismiss();

    });
  }

  async presentToast(txt) {
    const toast = await this.toastController.create({
      message: txt,
      duration: 3000,
      position : 'top',
      mode:'ios',
      color:'dark'
    });
    toast.present();
  }

  detail(odata)
  {
    localStorage.setItem('odata', JSON.stringify(odata));
    
    this.nav.navigateForward('/detail');
  }
}
