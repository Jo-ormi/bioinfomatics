create table miRNA (
    num int not null auto_increment,
    miRNA_ID char(80) not null,
    Gene_Name char(80),
    Gene_ID char(80),
    Ensembl_ID char(80),
    OMIM char(80),
    primary key(num)
);