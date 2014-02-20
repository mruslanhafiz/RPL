/*insert data pc*/
insert into data_pc ( nama_pc, spek, owner, booked, state)
values ('Ganteng','windows 8','Ganteng','1','0');

insert into data_pc ( nama_pc, spek, owner, booked, state)
values ('Michael','windows 8','Michael','1','0');

insert into data_pc ( nama_pc, spek, owner, booked, state)
values ('Jake','windows 8','Jake','1','0');

/*admin*/
insert into admin values ('admin','admin');

/*insert user*/
insert into user (nama_user, hp_user, email_user, tanggal_pinjam)
values ('Toto','09353384','toto@gmail.com','2014-02-20');

/*pinjam*/
update data_pc set booked='1', booked_by=
(select nama_user from user where id_user=LAST_INSERT_ID())
where id_pc=2



