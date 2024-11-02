
![hasil register](image.png)
![data base register](image-6.png)
![hasil login](image-2.png)


![hasil memperbarui profil pengguna tahap pertama](image-3.png)
![hasil memperbarui profil pengguna tahap kedua](image-4.png)
![hasil data base setelah memperbarui profil](image-7.png)

untuk menambahkan fitur memperbarui profil pengguna saya function updateProfile programnya seperti berikut:
![function updateProfil](image-5.png)
setelah menambahkan function updateProfile saya menambahkan route untuk mengarahkan ke function updateProfile

![hasil menghapus user dengan admin](image-8.png)
![data base setelah menghapus salah satu user](image-10.png)

agar bisa menghapus user dengan admin saya harus membuat UserController terlebih dahulu setelah itu saya mengimplementasikan function destroy didalam user controler seperti berikut:
![usercontroller](image-9.png)
setelah itu saya menambahkan route untuk menghapus pengguna

![hasil mengambil daftar semua pengguna (hanya bisa diakses oleh admin).](image-11.png)

agar bisa mengambil daftar semua pengguna dan hanya bisa di akses oleh admin pertama saya menambahkan function index di userController seperti berikut ini:
![function index pada UserController](image-12.png)
setelah itu saya menambahkan root untuk mengakses daftar semua pengguna
