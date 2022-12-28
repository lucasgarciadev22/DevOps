#!bin/bash

echo "Building images..."

docker build -t lucasgarciadev22/backend-project:1.0
docker build -t lucasgarciadev22/database-project:1.0

echo "Pushing images..."

docker push lucasgarciadev22/backend-project:1.0
docker push lucasgarciadev22/database-project:1.0

echo "Creating services into Kubernetes Cluster..."

kubectl apply -f ./services/yml

echo "Generating deployments..."

kubectl apply -f ./persistent-volume-deployment.yml
kubectl apply -f ./web-app-deployment.yml