
install
    http://tecadmin.net/install-imagemagick-on-linux/

install
    apt-get install imagemagick php5-imagick

install
    yum install ImageMagick ImageMagick-devel
    yum install php-pecl-imagick
    service httpd restart

developer note
    - use bootstrap
    - parse use php, not javascript render template
    - output pure html (一次產生所有的 html 檔案, 不要點一頁, 產生一頁)
    - template 獨立於各 project
    - 最後要將 縮圖 & html 都輸出, 並 push to git
