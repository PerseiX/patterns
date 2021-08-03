pipeline {
    agent any

    stages {
        stage('Build') {
            steps {
                docker build -f .docker/Dockerfile -t pattern-app .
            }
        }
        stage('Test') {
            steps {
               docker run -it pattern-app vendor/phpunit/phpunit/phpunit
            }
        }
    }
}
