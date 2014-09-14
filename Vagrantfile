VAGRANTFILE_API_VERSION = "2"

Vagrant.configure(VAGRANTFILE_API_VERSION) do |config|

  # Every Vagrant virtual environment requires a box to build off of.
  config.vm.box = "ubuntu/trusty64"

  config.vm.define "development" do |vagrant|

     config.vm.network "private_network", ip: "192.168.33.10"

     config.vm.synced_folder "app", "/var/www-data/app"

        config.vm.provision "ansible" do |ansible|
         
         ansible.inventory_path = "ansible/inventory"
         ansible.playbook = "ansible/setup.yml"
         ansible.extra_vars = { hosts: "development" }
         ansible.verbose = "vvvv"

        end
   end
end
