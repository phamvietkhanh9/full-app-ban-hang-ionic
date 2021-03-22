# ssm_app
Shiper - Giao hàng nhanh

For build
ionic cordova build android --prod --release

For create signing key keytool
keytool -genkey -v -keystore my-release-key.keystore -alias shiper_app -keyalg RSA -keysize 2048 -validity 10000

For signing app with keystore
jarsigner -verbose -sigalg SHA1withRSA -digestalg SHA1 -keystore my-release-key.keystore app-release-unsigned.apk shiper_app

For signing app for publishing in playstore

zipalign -v 4 app-release-unsigned.apk shiper_app.apk


export JAVA_HOME="/Library/Java/JavaVirtualMachines/jdk1.8.0_261.jdk/Contents/Home"

echo "export PATH=\$PATH:~/Library/Android/sdk/build-tools/30.0.1/" >> ~/.bash_profile && . ~/.bash_profile