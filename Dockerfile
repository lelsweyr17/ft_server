# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    Dockerfile                                         :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: lelsweyr <lelsweyr@student.42.fr>          +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2021/02/10 12:21:37 by lelsweyr          #+#    #+#              #
#    Updated: 2021/02/12 20:45:47 by lelsweyr         ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

FROM debian:buster

RUN apt update
RUN apt install -y vim
RUN apt install -y php7.3-fpm php7.3-mysql php7.3-mbstring php-zip php-gd
RUN apt install -y nginx
RUN apt install -y wget
RUN apt install -y mariadb-server

RUN wget -P /tmp https://wordpress.org/latest.tar.gz
RUN wget -P /tmp https://files.phpmyadmin.net/phpMyAdmin/5.0.4/phpMyAdmin-5.0.4-all-languages.tar.gz
COPY ./src ./src

RUN ["bash", "./src/commands.sh"]

CMD ["bash", "./src/index.sh"]