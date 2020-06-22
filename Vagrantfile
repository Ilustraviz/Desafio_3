$script_mysql = <<-SCRIPT
  apt-get update && \
  apt-get install -y mysql-server-5.7 && \
  mysql -e "create user 'phpuser'@'%' identified by 'pass';" && \
  mysql -e "create database if not exists my_db;" && \
  mysql -e "GRANT ALL PRIVILEGES ON my_db.* TO 'phpuser'@'%';"
SCRIPT

Vagrant.configure("2") do |config|
  config.vm.box = "ubuntu/bionic64"

  config.vm.provider "virtualbox" do |vb|
    vb.memory = 512
    vb.cpus = 2
  end
  

  config.vm.define "teste_ilustraviz" do |teste_ilustraviz|
    teste_ilustraviz.vm.network "public_network", ip: "192.168.0.180"

    teste_ilustraviz.vm.provider "virtualbox" do |v|
      v.name = "ubuntu_bionic_teste_ilustraviz"
    end

    teste_ilustraviz.vm.provision "shell", inline: "apt-get update" 
    teste_ilustraviz.vm.synced_folder ".", "/vagrant", disabled: true
    teste_ilustraviz.vm.synced_folder ".", "/var/www/html"
    teste_ilustraviz.vm.provision "shell", inline: "apt-get upgrade -y" 
    teste_ilustraviz.vm.provision "shell", inline: "apt-get install php7.2 -y" 
    teste_ilustraviz.vm.provision "shell", inline: "apt-get install apache2 -y" 
    teste_ilustraviz.vm.provision "shell", inline: "systemctl start apache2" 
    teste_ilustraviz.vm.provision "shell", inline: "apt-get install php7.2-curl php7.2-gd php7.2-json php7.2-mbstring php7.2-intl php7.2-mysql php7.2-xml php7.2-zip -y" 
    teste_ilustraviz.vm.provision "shell", inline: "cat /configs/id_bionic.pub >> .ssh/authorized_keys"
    teste_ilustraviz.vm.provision "shell", inline: $script_mysql 
    teste_ilustraviz.vm.provision "shell", inline: "a2enmod rewrite" 
    teste_ilustraviz.vm.provision "shell", inline: "systemctl restart apache2" 
    teste_ilustraviz.vm.provision "shell", inline: "cat /configs/mysqld.cnf > /etc/mysql/mysql.conf.d/mysqld.cnf"
    teste_ilustraviz.vm.provision "shell", inline: "cat /configs/php.ini > /etc/php/7.2/apache2/php.ini"
    teste_ilustraviz.vm.provision "shell", inline: "cat /configs/apache2.conf > /etc/apache2/apache2.conf"
    teste_ilustraviz.vm.provision "shell", inline: "service apache2 restart" 
    teste_ilustraviz.vm.provision "shell", inline: "service mysql restart" 
    teste_ilustraviz.vm.provision "shell", inline: "mkdir /var/www/configs"
    teste_ilustraviz.vm.provision "shell", inline: "cat /configs/configs.php > /var/www/configs/configs.php"

    
    teste_ilustraviz.vm.synced_folder "./vagrant-configs", "/configs"
    
  end
  

  
end