# vagrant box add centos7 https://github.com/tommy-muehle/puppet-vagrant-boxes/releases/download/1.1.0/centos-7.0-x86_64.box

VAGRANTFILE_API_VERSION = "2"

Vagrant.configure(VAGRANTFILE_API_VERSION) do |config|

  ###################
  # DB
  ###################
  config.vm.define "db" do |db|
    db.vm.box = "centos7"
    db.vm.network "private_network", ip: "192.168.33.10"
    db.vm.provider :virtualbox do |vbox|
      vbox.name = "Vagrant_PHPTest_DB"
    end
    db.vm.provider "virtualbox" do |vb|
      vb.customize ["modifyvm", :id, "--memory", "1024"]
    end
    db.vm.provision "shell", :path => "db.sh"
  end

  ###################
  # PHP 5.6
  ###################
  config.vm.define "l56" do |web|
    web.vm.box = "centos7"
    web.vm.network "private_network", ip: "192.168.33.20"
    web.vm.provider :virtualbox do |vbox|
      vbox.name = "Vagrant_PHP56_Laravel"
    end
    web.vm.provider "virtualbox" do |vb|
      vb.customize ["modifyvm", :id, "--memory", "1024"]
    end
    web.vm.synced_folder "src/Laravel", "/vagrant/", owner:"apache" ,group:"apache"
    web.vm.provision "shell", :path => "php56.sh"
  end

  config.vm.define "c56" do |web|
    web.vm.box = "centos7"
    web.vm.network "private_network", ip: "192.168.33.30"
    web.vm.provider :virtualbox do |vbox|
      vbox.name = "Vagrant_PHP56_CakePHP"
    end
    web.vm.provider "virtualbox" do |vb|
      vb.customize ["modifyvm", :id, "--memory", "1024"]
    end
    web.vm.synced_folder "src/CakePHP", "/vagrant/", owner:"apache" ,group:"apache"
    web.vm.provision "shell", :path => "php56.sh"
  end

  config.vm.define "s56" do |web|
    web.vm.box = "centos7"
    web.vm.network "private_network", ip: "192.168.33.40"
    web.vm.provider :virtualbox do |vbox|
      vbox.name = "Vagrant_PHP56_Symfony"
    end
    web.vm.provider "virtualbox" do |vb|
      vb.customize ["modifyvm", :id, "--memory", "1024"]
    end
    web.vm.synced_folder "src/Symfony", "/vagrant/", owner:"apache" ,group:"apache"
    web.vm.provision "shell", :path => "php56.sh"
  end

  ###################
  # PHP 7
  ###################
  config.vm.define "l7" do |web|
    web.vm.box = "centos7"
    web.vm.network "private_network", ip: "192.168.33.70"
    web.vm.provider :virtualbox do |vbox|
      vbox.name = "Vagrant_PHP7_Laravel"
    end
    web.vm.provider "virtualbox" do |vb|
      vb.customize ["modifyvm", :id, "--memory", "1024"]
    end
    web.vm.synced_folder "src/Laravel", "/vagrant/", owner:"apache" ,group:"apache"
    web.vm.provision "shell", :path => "php7.sh"
  end

  config.vm.define "c7" do |web|
    web.vm.box = "centos7"
    web.vm.network "private_network", ip: "192.168.33.80"
    web.vm.provider :virtualbox do |vbox|
      vbox.name = "Vagrant_PHP7_CakePHP"
    end
    web.vm.provider "virtualbox" do |vb|
      vb.customize ["modifyvm", :id, "--memory", "1024"]
    end
    web.vm.synced_folder "src/CakePHP", "/vagrant/", owner:"apache" ,group:"apache"
    web.vm.provision "shell", :path => "php7.sh"
  end

  config.vm.define "s7" do |web|
    web.vm.box = "centos7"
    web.vm.network "private_network", ip: "192.168.33.90"
    web.vm.provider :virtualbox do |vbox|
      vbox.name = "Vagrant_PHP7_Symfony"
    end
    web.vm.provider "virtualbox" do |vb|
      vb.customize ["modifyvm", :id, "--memory", "1024"]
    end
    web.vm.synced_folder "src/Symfony", "/vagrant/", owner:"apache" ,group:"apache"
    web.vm.provision "shell", :path => "php7.sh"
  end

end
