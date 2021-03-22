import {Component, OnInit} from '@angular/core';
import {ServerService} from '../service/server.service';
import {NavController, ToastController} from '@ionic/angular';

@Component({
    selector: 'app-order',
    templateUrl: 'order.page.html',
    styleUrls: ['order.page.scss'],
})
export class OrderPage implements OnInit {
    text: any;
    phone: any;
    name: any;
    address: any;
    table: any;
    items: any[] = [];
    lastid = 0;
    food: any[] = [];

    constructor(private serverService: ServerService, public toastController: ToastController, private nav: NavController) {

        this.text = JSON.parse(localStorage.getItem('app_text'));
        this.serverService.itemList(localStorage.getItem('user_id')).subscribe((it: any) => {
            this.food = it.data;

        });
    }

    ngOnInit() {
    }

    async add(data) {
        let item_id = [];
        let unit = [];
        let qty = [];
        this.items.forEach(it => {
            item_id.push(data[it.id + '_name']);
            unit.push(data[it.id + '_type']);
            qty.push(data[it.id + '_quantity']);
        });
        data.store_id = localStorage.getItem('user_id');
        data.item_id = item_id;
        data.unit = unit;
        data.qty = qty;

        this.serverService.createOrder(data).subscribe(it => {
            if (data) {
                this.presentToast('Đơn hàng đã hoàn tất thành công.');

                this.nav.navigateRoot('home');
            }

        });


    }

    async presentToast(txt) {
        const toast = await this.toastController.create({
            message: txt,
            duration: 2000,
            position: 'top'
        });
        toast.present();
    }

    addItem() {
        this.lastid++;
        this.items.push({id: this.lastid, item_id: null, type: null, quantity: null});
    }

    test() {

    }

    getType(id: any, form: any): any[] {
        let food = this.food.find(it => it.id == form[id + '_name']);
        let result = [];
        if (food && food.large_price) {
            result.push({id: 3, name: 'lớn'});
        }
        if (food && food.medium_price) {
            result.push({id: 2, name: 'trung bình'});
        }
        if (food && food.small_price) {
            result.push({id: 1, name: 'nhỏ'});
        }
        return result;
    }

    remove(id: any) {
        this.items.splice(this.items.indexOf(it => it.id == id), 1);
    }
}
