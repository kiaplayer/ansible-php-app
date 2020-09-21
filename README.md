# PHP environment

## Install Ansible locally

[Install Ansible for your platform](https://docs.ansible.com/ansible/latest/installation_guide/intro_installation.html)

## Install Ansible roles
```
$ cd .ansible
$ ansible-galaxy install --roles-path playbooks/roles -r requirements.yml --force
```

## Add new inventory (if needed) or use inventory "vagrant"
```
└── inventories
    ├── vagrant
    │   ├── ...
    │   └── inventory.yml
    └── test-stand-01         <== new deploy inventory
        ├── group_vars
        │   └── all.yml
        ├── host_vars
        │   └── node.yml
        └── inventory.yml
```

## Execute Ansible playbooks for necessary inventory
```
$ cd .ansible
$ ansible-playbook -i inventories/<inventory_folder>/inventory.yml --user <username> --become playbooks/php-app.yml
```

### Example for Vagrant environment
```
$ vagrant up
$ cd .ansible
$ ansible-playbook -i inventories/vagrant/inventory.yml --become playbooks/php-app.yml
```
