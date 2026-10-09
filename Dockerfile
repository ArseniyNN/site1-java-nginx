# Сборка Java проекта
FROM maven:3.9.6-eclipse-temurin-17 AS build
WORKDIR /app
COPY pom.xml .
COPY src ./src
RUN mvn clean package -DskipTests

# Финальный образ: Nginx отдает статику или проксирует, либо разворачиваем Nginx + Java
FROM nginx:alpine
COPY nginx.conf /etc/nginx/conf.d/default.conf
# Копируем скомпилированные статические шаблоны или запуск через Nginx
COPY --from=build /app/src/main/resources/templates /usr/share/nginx/html
COPY --from=build /app/src/main/resources/static /usr/share/nginx/html
EXPOSE 80
CMD ["nginx", "-g", "daemon off;"]
