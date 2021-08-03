pipeline {
    agent any

    stages {
        stage('Build') {
            steps {
                sh "docker build -f .docker/Dockerfile -t pattern-app ."
            }
        }
        stage('Test') {
            steps {
               sh "docker run pattern-app vendor/phpunit/phpunit/phpunit"
            }
        }
    }
}
