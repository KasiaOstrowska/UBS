<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190703203338 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('ALTER TABLE backup ADD vm_id INT NOT NULL');
        $this->addSql('ALTER TABLE backup ADD plan_id INT NOT NULL');
        $this->addSql('ALTER TABLE backup ADD CONSTRAINT FK_3FF0D1ACE0FCD18E FOREIGN KEY (vm_id) REFERENCES vm (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE backup ADD CONSTRAINT FK_3FF0D1ACE899029B FOREIGN KEY (plan_id) REFERENCES plan (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX IDX_3FF0D1ACE0FCD18E ON backup (vm_id)');
        $this->addSql('CREATE INDEX IDX_3FF0D1ACE899029B ON backup (plan_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE backup DROP CONSTRAINT FK_3FF0D1ACE0FCD18E');
        $this->addSql('ALTER TABLE backup DROP CONSTRAINT FK_3FF0D1ACE899029B');
        $this->addSql('DROP INDEX IDX_3FF0D1ACE0FCD18E');
        $this->addSql('DROP INDEX IDX_3FF0D1ACE899029B');
        $this->addSql('ALTER TABLE backup DROP vm_id');
        $this->addSql('ALTER TABLE backup DROP plan_id');
    }
}
