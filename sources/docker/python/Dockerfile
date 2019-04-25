# FROM frolvlad/alpine-python3
FROM jupyter/minimal-notebook

USER root
RUN apt -y update &&\
    apt -y install python3 python3-pip

RUN pip3 install --upgrade pip && \
    python3 -m pip install tweepy py2neo pymongo influxdb xmltodict 
USER $NB_UID
