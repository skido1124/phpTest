# vagrant box add centos7 https://github.com/tommy-muehle/puppet-vagrant-boxes/releases/download/1.1.0/centos-7.0-x86_64.box

VAGRANTFILE_API_VERSION = "2"

Vagrant.configure(VAGRANTFILE_API_VERSION) do |config|
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
  
  config.vm.define "l56" do |web|
    web.vm.box = "centos7"
    web.vm.network "private_network", ip: "192.168.33.20"
    web.vm.provider :virtualbox do |vbox|
      vbox.name = "Vagrant_PHP56_Laravel"
    end
    web.vm.provider "virtualbox" do |vb|
      vb.customize ["modifyvm", :id, "--memory", "1024"]
    end
    web.vm.synced_folder "php56/Laravel", "/vagrant/"
    web.vm.provision "shell", :path => "php56.sh"
  end

end