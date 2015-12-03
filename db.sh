#!/bin/bash

sudo yum -y update

# firewall disable
sudo systemctl stop firewalld
sudo systemctl disable firewalld

# wget
sudo yum -y install wget

# repository
sudo rpm -Uvh http://ftp.iij.ad.jp/pub/linux/fedora/epel/7/x86_64/e/epel-release-7-5.noarch.rpm
sudo sed -i -e "s/enabled = 1/enabled = 0/g" /etc/yum.repos.d/epel.repo
sudo rpm -Uvh http://rpms.famillecollet.com/enterprise/remi-release-7.rpm
sudo sed -i -e "s/enabled = 1/enabled = 0/g" /etc/yum.repos.d/remi.repo
sudo yum -y install http://dev.mysql.com/get/mysql-community-release-el7-5.noarch.rpm
sudo yum -y update --enablerepo=epel,remi,remi-php56

# mysql
sudo yum -y install mysql mysql-devel mysql-server mysql-utilities
sudo systemctl start mysqld.service
sudo systemctl enable mysqld.service

