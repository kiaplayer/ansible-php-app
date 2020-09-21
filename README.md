# PHP environment

## Install Ansible locally

[Install Ansible for your platform](https://docs.ansible.com/ansible/latest/installation_guide/intro_installation.html)

## Install external Ansible roles (if needed)
```
$ cd .ansible
$ ansible-galaxy install -r requirements.yml --force
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

## Execute Ansible playbook for necessary inventory
```
$ cd .ansible
$ ansible-playbook -i inventories/<inventory_folder>/inventory.yml --user <username> --become playbooks/playbook.yml
```

### Example for Vagrant environment
```
$ vagrant up
$ cd .ansible
$ ansible-playbook -i inventories/vagrant/inventory.yml --become playbooks/playbook.yml
```
