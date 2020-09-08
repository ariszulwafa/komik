<?php
        // Print out main menu..
    system('clear');
    echo "_________________________\n";
    echo "|       KOMIK DEWASA    |\n";
    echo "|     AUTHOR :MR.ARIS   |\n";
    echo "|  WHATSAPP:08884196160 |\n";
    echo "______________________________________\n";
    echo "|       RECODE IZIN KE AUTHOR        |\n";
    echo "|    TOOLS UNTUK DOWNLOAD PDF KOMIK  |\n";
    echo "______________________________________\n";
    echo "|  LINK RUSAK HUBUNGI ADMIN  |\n";
    echo "|     JENIS KOMIK MADLOKI    |\n";
    echo "_____________________________\n";
    echo "pilih menu judul yang ingin di download:\n\n";
    echo "    1) CERITA CITRA EPS 1\n";
    echo "    2) CERITA CITRA EPS 2\n";
    echo "    3) CERITA CITRA EPS 3\n";
    echo "    4) UPACARA SEKOLAH\n";                                                                               
    echo "    5) INDOMARET\n";
    echo "    6) ICE CREAM\n";
    echo "    0) KELUAR\n";
    echo "Pilih Nomor : ";
    switch(trim(fgets(STDIN,256)))
        {
            case 1:
                echo "LINK NYA NIH GAN [ https://bit.ly/3h8Worc ]";
                system('figlet salin tuh link');
                exit();
            case 2:
                echo "LINK NYA NIH GAN [ https://bit.ly/3jUYXyB ]";
                system('figlet salin tuh link');
                exit();
            case 3:
                echo "LINK NYA NIH GAN [ https://bit.ly/3bz5oVi ]";
                system('figlet salin tuh link');
                exit();
            case 4:
                echo "LINK NYA NIH GAN [ https://bit.ly/3bzn7fk  ]";
                system('figlet salin tuh link');
                exit();
            case 5:
                echo "LINK NYA NIH GAN [ https://bit.ly/35sUL5x ]";
                   system('figlet salin tuh link');
                exit();
case 6:
                echo "LINK NYA NIH GAN [ https://bit.ly/3h7y0Gf ]";
                   system('figlet salin tuh link');
                exit();
            case "0":
                exit();
        }
    // Close standard in..
    fclose(STDIN);
?>
