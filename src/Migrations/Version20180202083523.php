<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180202083523 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE jobs_sfc ADD CONSTRAINT FK_807C5E66A76ED395 FOREIGN KEY (user_id) REFERENCES users (id)');
        $this->addSql('ALTER TABLE jobs_sfc RENAME INDEX user_id TO IDX_807C5E66A76ED395');
        $this->addSql('ALTER TABLE skills ADD former_user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE skills ADD CONSTRAINT FK_D53116708089BF81 FOREIGN KEY (former_user_id) REFERENCES users (id)');
        $this->addSql('CREATE INDEX IDX_D53116708089BF81 ON skills (former_user_id)');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE jobs_sfc DROP FOREIGN KEY FK_807C5E66A76ED395');
        $this->addSql('ALTER TABLE jobs_sfc RENAME INDEX idx_807c5e66a76ed395 TO user_id');
        $this->addSql('ALTER TABLE skills DROP FOREIGN KEY FK_D53116708089BF81');
        $this->addSql('DROP INDEX IDX_D53116708089BF81 ON skills');
        $this->addSql('ALTER TABLE skills DROP former_user_id');
    }
}
