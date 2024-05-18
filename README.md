# repository: aicoll-php-technical-challenge

## Servicio de manejo de datos empresas - Reto técnico Aicoll

Gestión de datos de **empresas** en **PHP**, bajo el marco de trabajo **Laravel**, incluyendo agregar, actualizar, consultar y eliminar empresas a través de un servicio web.

## Responsables

- **Desarrollador**: Jose Luis Trespalacios Bedoya
- **Veedor inicial de proyecto**: Javier Gonzalez

Este proyecto es la solución al desafío técnico de **Aicoll**, desarrollado en **PHP** utilizando el framework **Laravel**. El objetivo principal es gestionar los datos de una tabla llamada **empresas** a través de un conjunto de un servicio web. Estas funcionalidades permiten realizar operaciones completas de **CRUD** (Crear, Leer, Actualizar, Eliminar), así como consultas específicas y filtradas. Según los criterios de aceptación de la prueba técnica.

## Tecnologías y herramientas de proyecto

- **PHP**: Lenguaje de programación principal, este orientado a **Backend**.
- **Laravel**: Framework utilizado para el desarrollo del proyecto.
- **PostgreSQL**: Bases de datos utilizadas para el almacenamiento de los datos procesados.
- **Postman**: Herramienta para probar y documentar los servicios web.
- **PHP Unit**: Framework para realizar pruebas unitarias.
- **Docker**: Plataforma de contenedores utilizada para crear, distribuir y ejecutar aplicaciones de manera consistente en cualquier entorno.
- **GitHub Actions**: En definición de uso.
- **Amazon Elastic Container Registry (ECR)**: En definición de uso.
- **Amazon RDS (Relational Database Service)**: En definición de uso.

## Estructura, arquitectura, patrones y capas de aplicación

Para garantizar una estructura clara y mantenible, esta implementación sigue una arquitectura en capas. A continuación, se describe cada una de las capas y su responsabilidad dentro de la aplicación.

### 1. Capa de presentación

- **Objetivo**: Manejar la interacción con el usuario y mostrar la información.
- **Componentes**:
  - **Controladores**: Gestionan las solicitudes HTTP, coordinando la interacción entre la vista y el modelo.
  - **Vistas (Blade Templates)**: Presentan la información al usuario final de manera estructurada. (En dado caso de ser necesarias).

### 2. Capa de aplicación

- **Objetivo**: Orquestar la lógica de la aplicación y aplicar las reglas de negocio.
- **Componentes**:
  - **Servicios**: Contienen la lógica de negocio y reglas específicas que se aplican a los datos. Encapsulan operaciones complejas y las hacen reutilizables.

### 3. Capa de dominio

- **Objetivo**: Gestionar las reglas de negocio y la lógica central de la aplicación.
- **Componentes**:
  - **Modelos (Eloquent Models)**: Representan las entidades del dominio y gestionan la lógica relacionada con los datos.
  - **Repositorios**: Proporcionan una abstracción sobre la capa de acceso a datos, permitiendo la interacción con la base de datos de manera desacoplada.

### 4. Capa de infraestructura

- **Responsabilidad**: Manejar la persistencia de datos y otras preocupaciones de infraestructura.
- **Componentes**:
  - **Migraciones**: Definen la estructura de la base de datos.
  - **Configuraciones**: Archivos de configuración para la base de datos, servicios externos, etc.
  - **Proveedores de servicios**: Registran las implementaciones de repositorios y otros servicios en el contenedor de dependencias de Laravel.

### Implementación de la Arquitectura

#### Patrón MVC (Modelo-Vista-Controlador)

Laravel implementa el patrón MVC de forma nativa, separando claramente la lógica de presentación, negocio y datos.

#### Patrón Repository

Este patrón proporciona una abstracción sobre la capa de acceso a datos. Los repositorios encapsulan la lógica necesaria para interactuar con la base de datos.

#### Patrón Service

Los servicios encapsulan la lógica de negocio y las reglas específicas, permitiendo una mejor organización y reutilización del código.

#### Inyección de Dependencias

Laravel facilita la inyección de dependencias, mejorando la modularidad y la facilidad de prueba del código. Las dependencias se inyectan en los controladores y servicios a través de sus constructores.

#### Pruebas Unitarias

Utilizando PHPUnit, se realizan pruebas unitarias para asegurar el correcto funcionamiento de cada componente de manera aislada.

---

Esta arquitectura en capas asegura una clara separación de responsabilidades, facilitando la escalabilidad, mantenibilidad y testabilidad del proyecto.


## Instrucciones de uso

Sigue los siguientes pasos para configurar y utilizar el proyecto:

### 1. Instalación

1. Clona el repositorio:
    ```bash
    git clone https://github.com/josetresdev/aicoll-php-technical-challenge.git
    ```

2. Navega al directorio del proyecto:
    ```bash
    cd aicoll-php-technical-challenge
    ```

3. Instala las dependencias usando Composer:
    ```bash
    composer install
    ```

### 2. Configuración

1. Copia el archivo de configuración de ejemplo:
    ```bash
    cp .env.example .env
    ```

2. Configura las variables de entorno en el archivo `.env` según tu entorno de desarrollo, especialmente las relacionadas con la base de datos.

### 3. Migraciones y Semillas

1. Ejecuta las migraciones para crear la estructura de la base de datos:
    ```bash
    php artisan migrate
    ```

2. Opcionalmente, puedes ejecutar las semillas para poblar la base de datos con datos de ejemplo:
    ```bash
    php artisan db:seed
    ```

### 4. Ejecución

1. Inicia el servidor local de Laravel:
    ```bash
    php artisan serve
    ```

2. Accede a la aplicación en tu navegador web utilizando la URL proporcionada por el servidor local.

### 5. Uso de los Web Services

1. Utiliza un cliente de API como Postman para interactuar con los Web Services proporcionados por la aplicación.

2. Importa la colección de Postman incluida en el repositorio y prueba cada uno de los endpoints disponibles, incluyendo:
    - Agregar nuevas empresas
    - Actualizar datos de una empresa
    - Consultar empresas por NIT
    - Consultar todas las empresas registradas
    - Borrar empresas con estado inactivo
    - Filtrar empresas por estado

### 6. Pruebas Unitarias

1. Ejecuta las pruebas unitarias para asegurar el correcto funcionamiento de los componentes del proyecto:
    ```bash
    php artisan test
    ```

2. Revisa los resultados de las pruebas y asegúrate de que todas pasen satisfactoriamente.

¡Listo! Ahora puedes comenzar a utilizar y desarrollar sobre la aplicación.
