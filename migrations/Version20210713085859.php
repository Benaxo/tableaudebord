<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210713085859 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE activites (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE activites_processus (activites_id INT NOT NULL, processus_id INT NOT NULL, INDEX IDX_7300AE655B8C31B7 (activites_id), INDEX IDX_7300AE65A55629DC (processus_id), PRIMARY KEY(activites_id, processus_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE emplois (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE processus (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, responsable SMALLINT NOT NULL, suppleant SMALLINT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE profils (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, niveauadmin SMALLINT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE services (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE sitesdistants (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, dureedistance TIME DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE taches (id INT AUTO_INCREMENT NOT NULL, activite_id INT DEFAULT NULL, profilattache1_id INT DEFAULT NULL, profilattache2_id INT DEFAULT NULL, profilattache3_id INT DEFAULT NULL, profilattache4_id INT DEFAULT NULL, profilattache5_id INT DEFAULT NULL, nom VARCHAR(255) NOT NULL, tempsexecution TIME NOT NULL, INDEX IDX_3BF2CD989B0F88B1 (activite_id), INDEX IDX_3BF2CD983240E418 (profilattache1_id), INDEX IDX_3BF2CD9820F54BF6 (profilattache2_id), INDEX IDX_3BF2CD9898492C93 (profilattache3_id), INDEX IDX_3BF2CD9859E142A (profilattache4_id), INDEX IDX_3BF2CD98BD22734F (profilattache5_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE unetache (id INT AUTO_INCREMENT NOT NULL, activite_id INT DEFAULT NULL, tache_id INT DEFAULT NULL, INDEX IDX_57873EA49B0F88B1 (activite_id), UNIQUE INDEX UNIQ_57873EA4D2235D39 (tache_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE utilisateurs (id INT AUTO_INCREMENT NOT NULL, profil_id INT DEFAULT NULL, emploi_id INT DEFAULT NULL, service_id INT DEFAULT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, motdepasse VARCHAR(255) NOT NULL, INDEX IDX_497B315E275ED078 (profil_id), INDEX IDX_497B315EEC013E12 (emploi_id), INDEX IDX_497B315EED5CA9E6 (service_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE activites_processus ADD CONSTRAINT FK_7300AE655B8C31B7 FOREIGN KEY (activites_id) REFERENCES activites (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE activites_processus ADD CONSTRAINT FK_7300AE65A55629DC FOREIGN KEY (processus_id) REFERENCES processus (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE taches ADD CONSTRAINT FK_3BF2CD989B0F88B1 FOREIGN KEY (activite_id) REFERENCES activites (id)');
        $this->addSql('ALTER TABLE taches ADD CONSTRAINT FK_3BF2CD983240E418 FOREIGN KEY (profilattache1_id) REFERENCES profils (id)');
        $this->addSql('ALTER TABLE taches ADD CONSTRAINT FK_3BF2CD9820F54BF6 FOREIGN KEY (profilattache2_id) REFERENCES profils (id)');
        $this->addSql('ALTER TABLE taches ADD CONSTRAINT FK_3BF2CD9898492C93 FOREIGN KEY (profilattache3_id) REFERENCES profils (id)');
        $this->addSql('ALTER TABLE taches ADD CONSTRAINT FK_3BF2CD9859E142A FOREIGN KEY (profilattache4_id) REFERENCES profils (id)');
        $this->addSql('ALTER TABLE taches ADD CONSTRAINT FK_3BF2CD98BD22734F FOREIGN KEY (profilattache5_id) REFERENCES profils (id)');
        $this->addSql('ALTER TABLE unetache ADD CONSTRAINT FK_57873EA49B0F88B1 FOREIGN KEY (activite_id) REFERENCES activites (id)');
        $this->addSql('ALTER TABLE unetache ADD CONSTRAINT FK_57873EA4D2235D39 FOREIGN KEY (tache_id) REFERENCES taches (id)');
        $this->addSql('ALTER TABLE utilisateurs ADD CONSTRAINT FK_497B315E275ED078 FOREIGN KEY (profil_id) REFERENCES profils (id)');
        $this->addSql('ALTER TABLE utilisateurs ADD CONSTRAINT FK_497B315EEC013E12 FOREIGN KEY (emploi_id) REFERENCES emplois (id)');
        $this->addSql('ALTER TABLE utilisateurs ADD CONSTRAINT FK_497B315EED5CA9E6 FOREIGN KEY (service_id) REFERENCES services (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE activites_processus DROP FOREIGN KEY FK_7300AE655B8C31B7');
        $this->addSql('ALTER TABLE taches DROP FOREIGN KEY FK_3BF2CD989B0F88B1');
        $this->addSql('ALTER TABLE unetache DROP FOREIGN KEY FK_57873EA49B0F88B1');
        $this->addSql('ALTER TABLE utilisateurs DROP FOREIGN KEY FK_497B315EEC013E12');
        $this->addSql('ALTER TABLE activites_processus DROP FOREIGN KEY FK_7300AE65A55629DC');
        $this->addSql('ALTER TABLE taches DROP FOREIGN KEY FK_3BF2CD983240E418');
        $this->addSql('ALTER TABLE taches DROP FOREIGN KEY FK_3BF2CD9820F54BF6');
        $this->addSql('ALTER TABLE taches DROP FOREIGN KEY FK_3BF2CD9898492C93');
        $this->addSql('ALTER TABLE taches DROP FOREIGN KEY FK_3BF2CD9859E142A');
        $this->addSql('ALTER TABLE taches DROP FOREIGN KEY FK_3BF2CD98BD22734F');
        $this->addSql('ALTER TABLE utilisateurs DROP FOREIGN KEY FK_497B315E275ED078');
        $this->addSql('ALTER TABLE utilisateurs DROP FOREIGN KEY FK_497B315EED5CA9E6');
        $this->addSql('ALTER TABLE unetache DROP FOREIGN KEY FK_57873EA4D2235D39');
        $this->addSql('DROP TABLE activites');
        $this->addSql('DROP TABLE activites_processus');
        $this->addSql('DROP TABLE emplois');
        $this->addSql('DROP TABLE processus');
        $this->addSql('DROP TABLE profils');
        $this->addSql('DROP TABLE services');
        $this->addSql('DROP TABLE sitesdistants');
        $this->addSql('DROP TABLE taches');
        $this->addSql('DROP TABLE unetache');
        $this->addSql('DROP TABLE utilisateurs');
    }
}
