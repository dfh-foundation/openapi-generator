mvn deploy -DaltDeploymentRepository=github::default::https://maven.pkg.github.com/dfh-foundation/openapi-generator
cd modules/openapi-generator-gradle-plugin
./gradlew publishMavenJavaPublicationToGithubRepository
