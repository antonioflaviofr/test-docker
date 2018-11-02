FROM jenkins/jenkins:lts

USER root
RUN mkdir /var/log/jenkins
RUN mkdir /var/cache/jenkins
RUN chown -R jenkins:jenkins /var/log/jenkins
RUN chown -R jenkins:jenkins /var/cache/jenkins
RUN wget https://packages.elastic.co/curator/5/debian9/pool/main/e/elasticsearch-curator/elasticsearch-curator_5.5.4_amd64.deb
RUN dpkg -i elasticsearch-curator_5.5.4_amd64.deb
RUN mkdir /etc/curator
USER jenkins

ENV JAVA_OPTS="-Xmx4096m"
ENV JENKINS_OPTS="--handlerCountMax=300 --logfile=/var/log/jenkins/jenkins.log --webroot=/var/cache/jenkins/war"