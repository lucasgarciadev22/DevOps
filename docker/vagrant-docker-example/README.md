## This is an examplo of how to use Vagrant to create Docker Swarm clusters with automatized scripts. 
1. First you need to have docker and git installed on your VM.
2. Clone this repo :` git clone https://github.com/lucasgarciadev22/DevOps.git`
3. In the repo vagrant-docker-example you must init Vagrant services: `vagrant up`
4. To acess master node : `vagrant ssh`
5. To test if all VMs were properly created (including master and workers) : `docker node ls`

