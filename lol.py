print("Selamat datang di aplikasi rumus bidang datar")
print("Rumus bangun datar")
print("1. Persegi")
print("2. Persegi Panjang")
print("3. Segitiga")
print("4. Lingkaran")
print("5. Jajar Genjang")
print("6. Trapesium")
print("7. Belah Ketupat")
print("8. Layang-Layang")
print("9. Exit")
print("rumus bangun datar: ")
pilih = int(input("Masukkan pilihan: "))

if pilih == 1:
    print("Rumus Luas Persegi")
    print("Luas = sisi x sisi")
    print("Rumus Keliling Persegi")
    print("Keliling = 4 x sisi")
    print("Rumus Volume Persegi")
    print("Volume = sisi x sisi x sisi")
    print("Rumus Luas Permukaan Persegi")
    print("Luas Permukaan = 6 x sisi x sisi")
elif pilih == 2:
    print("Rumus Luas Persegi Panjang")
    print("Luas = panjang x lebar")
    print("Rumus Keliling Persegi Panjang")
    print("Keliling = 2 x (panjang + lebar)")
    print("Rumus Volume Persegi Panjang")
    print("Volume = panjang x lebar x tinggi")
    print("Rumus Luas Permukaan Persegi Panjang")
    print("Luas Permukaan = 2 x (panjang x lebar + panjang x tinggi + lebar x tinggi)")
elif pilih == 3:
    print("Rumus Luas Segitiga")
    print("Luas = 1/2 x alas x tinggi")
    print("Rumus Keliling Segitiga")
    print("Keliling = sisi x sisi x sisi")
    print("Rumus Volume Segitiga")
    print("Volume = 1/3 x alas x tinggi x tinggi")
    print("Rumus Luas Permukaan Segitiga")
    print("Luas Permukaan = 1/2 x alas x tinggi")
elif pilih == 4:
    print("Rumus Luas Lingkaran")
    print("Luas = phi x jari-jari x jari-jari")
    print("Rumus Keliling Lingkaran")
    print("Keliling = 2 x phi x jari-jari")
    print("Rumus Volume Lingkaran")
    print("Volume = 4/3 x phi x jari-jari x jari-jari x jari-jari")
    print("Rumus Luas Permukaan Lingkaran")
    print("Luas Permukaan = 4 x phi x jari-jari x jari-jari")
elif pilih == 5:
    print("Rumus Luas Jajar Genjang")
    print("Luas = alas x tinggi")
    print("Rumus Keliling Jajar Genjang")
    print("Keliling = 2 x (alas + tinggi)")
    print("Rumus Volume Jajar Genjang")
    print("Volume = alas x tinggi x tinggi")
    print("Rumus Luas Permukaan Jajar Genjang")
    print("Luas Permukaan = 2 x (alas x tinggi + alas x tinggi + tinggi x tinggi)")
elif pilih == 6:
    print("Rumus Luas Trapesium")
    print("Luas = 1/2 x (alas + atas) x tinggi")
    print("Rumus Keliling Trapesium")
    print("Keliling = sisi x sisi x sisi x sisi")
    print("Rumus Volume Trapesium")
    print("Volume = 1/3 x (alas + atas) x tinggi x tinggi")
    print("Rumus Luas Permukaan Trapesium")
    print("Luas Permukaan = 1/2 x (alas + atas) x tinggi")
elif pilih == 7:
    print("Rumus Luas Belah Ketupat")
    print("Luas = 1/2 x diagonal x diagonal")
    print("Rumus Keliling Belah Ketupat")
    print("Keliling = 4 x sisi")
    print("Rumus Volume Belah Ketupat")
    print("Volume = 1/3 x diagonal x diagonal x tinggi")
    print("Rumus Luas Permukaan Belah Ketupat")
    print("Luas Permukaan = 1/2 x diagonal x diagonal")
elif pilih == 8:
    print("Rumus Luas Layang-Layang")
    print("Luas = 1/2 x diagonal x diagonal")
    print("Rumus Keliling Layang-Layang")
    print("Keliling = 4 x sisi")
    print("Rumus Volume Layang-Layang")
    print("Volume = 1/3 x diagonal x diagonal x tinggi")
    print("Rumus Luas Permukaan Layang-Layang")
    print("Luas Permukaan = 1/2 x diagonal x diagonal")
elif pilih == 9:
    print("Exit")
else:
    print("Pilihan tidak ada")