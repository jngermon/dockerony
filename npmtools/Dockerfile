FROM ubuntu:trusty

ENV DEBIAN_FRONTEND noninteractive

# Install packages that are specific to our stack
RUN apt-get update && \
    apt-get install --yes \
     git \
     curl \
     wget \
     npm nodejs-legacy && \
     rm --recursive --force /var/lib/apt/lists/*

# install bower
RUN npm install --global bower

COPY entrypoint.sh /

RUN chmod u+x /entrypoint.sh

RUN mkdir /home/developer

ENTRYPOINT ["/entrypoint.sh"]
