# Mini Site PHP/MYSQL

First create a database named `testing`, or if you know what you do feel free to edit the file `/php/connexion.php`

Then Create this Table:

```SQL
CREATE TABLE `utilisateurs` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `date` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  `nom` varchar(40) NOT NULL,
  `prenom` varchar(40) NOT NULL,
  `login` varchar(40) NOT NULL,
  `pass` varchar(40) NOT NULL,
   PRIMARY KEY (`id`)
);
```

After that you are ready to run the mini site
