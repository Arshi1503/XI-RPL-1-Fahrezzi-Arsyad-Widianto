angka1 = int(input("Masukkan angka pertama: "))     # Input angka1
angka2 = int(input("Masukkan angka kedua: "))       # Input angka2
# operasi = input("Masukkan operator (+,-,*,/): ")  # aktifkan kode ini apabila user ingin menggunakan hanya satu operator

class Kalkulator:
    def __init__(self, angka1, angka2):
        self.angka1 = angka1                        # Menginisialisasi atribut angka1
        self.angka2 = angka2                        # Menginisialisasi atribut angka2
    def tambah(self):                               # Membuat metode tambah
        return self.angka1 + self.angka2            # Mengembalikan angka1 + angka2
    def kurang(self):                               # Membuat metode kurang
        return self.angka1 - self.angka2            # Mengembalikan angka1 - angka2
    def kali(self):                                 # Membuat metode kali
        return self.angka1 * self.angka2            # Mengembalikan angka1 * angka2
    def bagi(self):                                 # Membuat metode bagi
        if (angka2 != 0):                           # Menangkal error apabila angka2 = 0, yang akan menyebabkan error "ZeroDivisionError"
            return self.angka1 / self.angka2        # Mengembalikan angka1 / angka2
        else:                   
            return "Angka Kedua tidak boleh 0"      # Akan mengembalika peringatan bahwa "Angka Kedua tidak boleh 0" apabila angka2 = 0



k = Kalkulator(angka1, angka2)                      # Membuat objek k dari class Kalkulator
print("Hasil penjumlahan:", k.tambah())             # Memberikan hasil output dari angka yang ditambahkan
print("Hasil pengurangan:", k.kurang())             # Memberikan hasil output dari angka yang dikurangkan
print("Hasil perkalian:", k.kali())                 # Memberikan hasil output dari angka yang dikalikan
print("Hasil pembagian:", k.bagi())                 # Memberikan hasil output dari angka yang dibagikan


#Ini adalah cara lain apabila user hanya ingin menggunakan salah satu operator
# match operator:
#     case "+":
#         print(k.tambah())
#     case "-":
#         print(k.kurang())
#     case "*":
#         print(k.kali())
#     case "/":
#         print(k.bagi())