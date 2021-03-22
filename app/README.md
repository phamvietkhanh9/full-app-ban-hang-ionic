# ssm_app
Shiper - Giao hàng nhanh

For build
1. android: ionic cordova build android --prod --release
2. ios:
npm install
ionic cordova platform remove ios
ionic cordova platform add ios
ionic cordova build ios

A. Đối với HĐH Windows:
1. Tạo key:
- Di chuyển đến thư mục 
C:\Program Files\Java\jdk1.8.0_261\bin
- Sau đó chạy lệnh sau để tạo key:
keytool -genkey -v -keystore my-release-key.keystore -alias supers_app -keyalg RSA -keysize 2048 -validity 10000
2. Đăng ký file với key mới tạo:
- Cũng tại đây (C:\Program Files\Java\jdk1.8.0_261\bin) chạy lệnh sau để đăng ký key:
jarsigner -verbose -sigalg SHA1withRSA -digestalg SHA1 -keystore my-release-key.keystore app-release-unsigned.apk supers_app
3. Nén file cái đặt để xuất bản lên PlayStore
- Copy file "app-release-unsigned.apk" đã đăng ký theo bước trên vào thư mục sau: C:\Users\Administrator\AppData\Local\Android\Sdk\build-tools\30.0.3
- Sau đó chạy lệnh sau đển nén lại thành file cài đặt và xuất bản lên Google Store:
zipalign -v 4 app-release-unsigned.apk supers_app.apk


export JAVA_HOME="/Library/Java/JavaVirtualMachines/jdk1.8.0_261.jdk/Contents/Home"
echo "export PATH=\$PATH:~/Library/Android/sdk/build-tools/30.0.1/" >> ~/.bash_profile && . ~/.bash_profile
set ANDROID_HOME=C:\<installation location>\android-sdk-windows
set PATH=%PATH%;%ANDROID_HOME%\tools;%ANDROID_HOME%\platform-tools
set ANDROID_HOME=C:\Users\Administrator\AppData\Local\Android\sdk
set JAVA_HOME=C:\Program Files\java\jdk1.8.0_261