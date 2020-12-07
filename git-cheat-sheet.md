# Step 1  generate key 
ssh-keygen -t rsa -b 4096 -C "sergiolfq@gmail.com"

press enter for file location and enter the passphrase and confirm it 

then key is generate 
# Step 2  start ssh agent 
eval $(ssh-agent -S)

ssh-add /home/sergio/.ssh/id_rsa
Enter passphrase for  .... :   entre passphrase 
Identity added: 

# Step 3 copy key in Github

clip < ~/.ssh/id_rsa.pub    (this did not work in ubuntu so i used cat instead)
cat  ~/.ssh/id_rsa.pub
