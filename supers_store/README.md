# ssm_app
Siêu thị sạch App

ionic cordova build android --prod --release

keytool -genkey -v -keystore my-release-key.keystore -alias supers_store -keyalg RSA -keysize 2048 -validity 10000

jarsigner -verbose -sigalg SHA1withRSA -digestalg SHA1 -keystore my-release-key.keystore app-release-unsigned.apk supers_store

zipalign -v 4 app-release-unsigned.apk supers_store.apk