# altschool_holiday_challenge
Altschool Holiday Challenge

## VPC
![VPC](https://user-images.githubusercontent.com/86523250/211903586-940caf14-088e-41f6-bbf2-dcc46db2e765.png)

## SUBNETS
### Public 1a Subnet
![public-1a-subnet](https://user-images.githubusercontent.com/86523250/211904129-98912fa1-86fe-46ff-8462-d5e8dc34df7b.png)
### Public 1b Subnet
![public-1b-subnet](https://user-images.githubusercontent.com/86523250/211904238-7437bd3c-b5a2-4920-ae0f-2e933ffc6df1.png)
### Private 1a Subnet
![public-1a-subnet](https://user-images.githubusercontent.com/86523250/211904323-bcd613d9-ee80-4e77-bc45-715e99edbe95.png)
### Private 1b Subnet
![private-1b-subnet](https://user-images.githubusercontent.com/86523250/211904441-da98c3cd-2448-49ff-94b9-b74359dcf2fd.png)

## ROUTE TABLES
### Public Route Table
One route table serves the two public subnets (1a, 1b)
![public-rt](https://user-images.githubusercontent.com/86523250/211904764-a3d6b5c3-70bf-4c7f-b9bd-5143c2d388de.png)
![public-rt2](https://user-images.githubusercontent.com/86523250/211904820-a0eb3617-9d51-438a-8f6f-ab23607d2c83.png)

### Private 1a Route Table
They were connected to the internet using the NAT instance rather than a NAT gateway 
![private-1a-rt](https://user-images.githubusercontent.com/86523250/211904964-d128669a-2da7-40ff-bd1a-8e677cd8ecfb.png)
![private-1a-rt2](https://user-images.githubusercontent.com/86523250/211905009-ee4b9eda-b137-40e0-bf30-cd9f9638dcf7.png)

### Private 1b Route Table
![private-1b-rt](https://user-images.githubusercontent.com/86523250/211905100-97c49365-e87c-40bd-99b9-cb85bbe84c2e.png)
![private-1b-rt2](https://user-images.githubusercontent.com/86523250/211905145-10a00d9e-f98d-4196-95e3-8cba3ddd3fae.png)

### INTERNET GATEWAY
![igw](https://user-images.githubusercontent.com/86523250/211905434-853118c0-48f1-4bf3-a347-656371641a50.png)

## INSTANCES
### Private Instance 1
![private_instance1](https://user-images.githubusercontent.com/86523250/211906466-4d5c7ead-aec4-4c66-a4cd-08487f720d75.png)

### Private Instance 2
![private_instance2](https://user-images.githubusercontent.com/86523250/211906547-748d6bbc-5fc1-4241-87e2-f6fd0dc3eeaf.png)

### NAT INSTANCE
This was created in the public subnet of the VPC and attached to the private instances through route table to enabled them connect to the internet without a public IP address
![nat-instance](https://user-images.githubusercontent.com/86523250/211906623-b28f8bc7-bbd3-4b8d-af4c-9ea2b7fcbe88.png)

## LOAD BALANCER
### Load Balancer
![lb](https://user-images.githubusercontent.com/86523250/211911035-d2d6cc83-d1ee-41c6-8c86-e4cb8b7727d1.png)

### Target Group
![tg](https://user-images.githubusercontent.com/86523250/211911111-f9de840e-6837-4f40-b388-99bdacc60b93.png)
![tg2](https://user-images.githubusercontent.com/86523250/211911132-8a4f178d-5480-46b2-b413-388a47ef922a.png)















