#!/bin/bash

pushd /var/log/cups > /dev/null

# detecter les changements du fichier /var/log/cups/page_log

git diff -U0 page_log  | egrep "^[+]" | egrep -v page_log$ | sed 's/.//' |\
	awk -v q="'" '(NF==12) {print "insert into page_log (printer,user,job_id,date_time,page_number,num_copies,job_billing,job_originating_hostname,job_name,media,sides) values ("q $1 q","q $2 q","q $3 q","q $4,$5 q","q $6 q","q $7 q","q $8 q","q $9 q","q $10 q","q $11 q","q $12 q");"}' | \
	mysql -u root --password='BLSIBordeaux1!' blsi



git commit page_log -m "/var/log/cups/page_log:  $(date)"

