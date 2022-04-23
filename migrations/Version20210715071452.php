<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210715071452 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE activites_processus');
        $this->addSql('ALTER TABLE activites ADD processus_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE activites ADD CONSTRAINT FK_766B5EB5A55629DC FOREIGN KEY (processus_id) REFERENCES processus (id)');
        $this->addSql('CREATE INDEX IDX_766B5EB5A55629DC ON activites (processus_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE activites_processus (activites_id INT NOT NULL, processus_id INT NOT NULL, INDEX IDX_7300AE65A55629DC (processus_id), INDEX IDX_7300AE655B8C31B7 (activites_id), PRIMARY KEY(activites_id, processus_id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE activites_processus ADD CONSTRAINT FK_7300AE655B8C31B7 FOREIGN KEY (activites_id) REFERENCES activites (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE activites_processus ADD CONSTRAINT FK_7300AE65A55629DC FOREIGN KEY (processus_id) REFERENCES processus (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE activites DROP FOREIGN KEY FK_766B5EB5A55629DC');
        $this->addSql('DROP INDEX IDX_766B5EB5A55629DC ON activites');
        $this->addSql('ALTER TABLE activites DROP processus_id');
    }
}
