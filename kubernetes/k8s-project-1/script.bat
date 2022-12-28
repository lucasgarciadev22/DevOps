echo "Building images..."

docker build -t lucasgarciadev22/backend-project:1.0
docker build -t lucasgarciadev22/database-project:1.0

echo "Pushing images..."

docker push lucasgarciadev22/backend-project:1.0
docker push lucasgarciadev22/database-project:1.0