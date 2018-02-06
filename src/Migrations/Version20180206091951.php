<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180206091951 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE results DROP FOREIGN KEY FK_9FA3E41457903FEF');
        $this->addSql('DROP INDEX IDX_9FA3E41457903FEF ON results');
        $this->addSql('ALTER TABLE results CHANGE jobs_sfc_id job_sfc_id INT NOT NULL');
        $this->addSql('ALTER TABLE results ADD CONSTRAINT FK_9FA3E414CA91356F FOREIGN KEY (job_sfc_id) REFERENCES jobs_sfc (id)');
        $this->addSql('CREATE INDEX IDX_9FA3E414CA91356F ON results (job_sfc_id)');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE results DROP FOREIGN KEY FK_9FA3E414CA91356F');
        $this->addSql('DROP INDEX IDX_9FA3E414CA91356F ON results');
        $this->addSql('ALTER TABLE results CHANGE job_sfc_id jobs_sfc_id INT NOT NULL');
        $this->addSql('ALTER TABLE results ADD CONSTRAINT FK_9FA3E41457903FEF FOREIGN KEY (jobs_sfc_id) REFERENCES jobs_sfc (id)');
        $this->addSql('CREATE INDEX IDX_9FA3E41457903FEF ON results (jobs_sfc_id)');
    }
}
