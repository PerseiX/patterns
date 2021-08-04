pipeline {
    agent any

    stages {
        stage('Build') {
            steps {
                sh "docker build -f .docker/Dockerfile -t pattern-app ."
            }
        }
        stage('Pre build') {
            parallel {
                stage('Unit tests') {
                    steps {
                       sh "docker run pattern-app vendor/phpunit/phpunit/phpunit"
                    }
                }
                stage('Static analysis') {
                    steps {
                       sh "docker run patter-app vendor/bin/phpcs --standard=phpcs.xml AbstractFactory Adapter Builder Decorator FactoryMethod Prototype"
                    }
                }
            }
        }
        stage('Push image') {
            steps {
                withCredentials([usernamePassword(
                    credentialsId: ' github-account',
                    passwordVariable: 'DOCKER_REGISTRY_PWD',
                    usernameVariable: 'DOCKER_REGISTRY_USER'
                )]) {
                    sh 'docker login ghcr.io -u $DOCKER_REGISTRY_USER -p $DOCKER_REGISTRY_PWD'
                    sh 'docker tag pattern-app ghcr.io/perseix/pattern-app:$GIT_PREVIOUS_COMMIT'
                    sh 'docker push ghcr.io/perseix/pattern-app:$GIT_PREVIOUS_COMMIT'
                }
            }
        }
    }
}
