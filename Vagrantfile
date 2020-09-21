Vagrant.configure('2') do |config|

    box_name = 'node01'
    box_ip = '10.2.2.60'

    config.vm.define box_name do |box_config|
        box_config.vm.box = 'ubuntu/bionic64'
        box_config.vm.network :private_network, ip: box_ip
    end
end
