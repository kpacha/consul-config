consul-config
================

A simple config module with an integrated consul service discovery system for php

[![Build Status](https://travis-ci.org/kpacha/consul-config.png?branch=master)](https://travis-ci.org/kpacha/consul-config) [![Dependency Status](https://www.versioneye.com/user/projects/54691a34950825a8f700004b/badge.svg?style=flat)](https://www.versioneye.com/user/projects/54691a34950825a8f700004b)

#Requirements

* git
* PHP >=5.3.3
* [kpacha/config](https://github.com/kpacha/config) (so check its dependencies!)
* [sensiolabs/consul-php-sdk](https://github.com/sensiolabs/consul-php-sdk) (so check its dependencies!)

#Installation

##Standalone

##As a library (recomended)

Include the `kpacha/consul-config` package in your compose.json with all the dependencies of your project

    "require":{
        "kpacha/consul-config": "~0.1"
    }

###Git installation

Clone the repo

    $ git clone https://github.com/kpacha/consul-config.git

Install the php dependencies

    $ cd consul-config
    $ curl -sS https://getcomposer.org/installer | php
    $ php composer.phar install

###Composer installation

Create a project with composer

    $ curl -sS https://getcomposer.org/installer | php
    $ php composer.phar create-project kpacha/consul-config [directory]

Remeber to set the [directory] parameter or composer will create the project in your current path.

#Config files

Just set the value `\Kpacha\Config\Consul\ServiceManager` to your `service-manager` config param. 
Visit [kpacha/config](https://github.com/kpacha/config) for more info.

#Usage

##Config module

This package is a transparent extension for [kpacha/config](https://github.com/kpacha/config) module

##Console

This package is a transparent extension for [kpacha/config](https://github.com/kpacha/config) console
