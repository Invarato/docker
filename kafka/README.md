# Kafka


## Contiene

 * zookeeper: https://registry.hub.docker.com/_/zookeeper
 * confluentinc/cp-kafka: https://registry.hub.docker.com/r/confluentinc/cp-kafka
 * confluentinc/cp-schema-registry: https://registry.hub.docker.com/r/confluentinc/cp-schema-registry
 * confluentinc/cp-kafka-connect: https://registry.hub.docker.com/r/confluentinc/cp-kafka-connect
 * confluentinc/cp-kafka-rest: https://registry.hub.docker.com/r/confluentinc/cp-kafka-rest
 * provectuslabs/kafka-ui: https://registry.hub.docker.com/r/provectuslabs/kafka-ui

Está todo en una red: `zookeeper-network`

Los datos del broker se guardan en el volumen: `kafkabroker-data`


## Iniciar
Con las variables de [.env](.env)
````shell
docker-compose up
````

O especificando las variables:
````shell
export ZOOKEEPER_VERSION=3.9.2
export CONFLUENTINC_KAFKA_VERSION=7.6.0
export KAFKA_UI_VERSION=v0.7.1
export CONFLUENTINC_KAFKACAT_VERSION=7.1.11
export CONFLUENTINC_KAFKACAT_TOPIC=topic-ejemplo

docker-compose up
````

## Endopoints

 * Kafka UI: http://localhost:8800/
 * Kafka Rest Proxy: http://localhost:8082/
 * Kafka Connect: http://localhost:8083/
 * Schema Registry: http://localhost:8085/

Boostrap Service: 127.0.0.1:9092

## Probar

### Kafka UI
Puedes crear un topic en `Topics`, pulsar `+ Add a Topic` y enviarle un mensaje con `Produce Message`.


### Kafka Rest Proxy
Enviando mensaje a topic por ejemplo:
````shell
curl -X POST -H "Content-Type: application/vnd.kafka.json.v2+json" --data 'mensaje' http://localhost:8082/topics/topic-ejemplo
````

### Kafkacat
Enviando mensajes con kafkacat a un topic.
Basta con ejecutar el contenedor como esté en el [compose.yml](compose.yml)

### Conectors
Descargar conector de ejemplo: https://www.confluent.io/hub/confluentinc/kafka-connect-datagen/

Añadir descomprimido a carpeta connectors:
````shell
unzip ./connectors/confluentinc-kafka-connect-datagen-*.zip -d ./connectors
````

Cargar un conector:
````shell
curl -X POST -H "Content-Type: application/json" --data '{
  "name": "miconector-datagen",
  "config": {
    "connector.class": "io.confluent.kafka.connect.datagen.DatagenConnector",
    "kafka.topic": "topic-ejemplo",
    "quickstart": "users",
    "key.converter": "org.apache.kafka.connect.storage.StringConverter",
    "value.converter": "org.apache.kafka.connect.json.JsonConverter",
    "value.converter.schemas.enable": "false",
    "max.interval": 1000,
    "iterations": 10000000,
    "tasks.max": "1"
  }
}' http://localhost:8083/connectors
````

Ver estancia:
````shell
curl http://localhost:8083/connectors/miconector-datagen
````
