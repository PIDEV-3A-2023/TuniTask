<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230409005230 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE answers DROP FOREIGN KEY fk_question_answers');
        $this->addSql('ALTER TABLE answers CHANGE id_question id_question INT DEFAULT NULL');
        $this->addSql('ALTER TABLE answers ADD CONSTRAINT FK_50D0C606E62CA5DB FOREIGN KEY (id_question) REFERENCES questions (id_question)');
        $this->addSql('ALTER TABLE commentaire CHANGE offre_id offre_id INT DEFAULT NULL, CHANGE user_id user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE demande CHANGE id_client id_client INT DEFAULT NULL');
        $this->addSql('ALTER TABLE offre CHANGE user_id user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE proposition CHANGE id_demande id_demande INT DEFAULT NULL, CHANGE id_freelancer id_freelancer INT DEFAULT NULL');
        $this->addSql('ALTER TABLE questions CHANGE id_quiz id_quiz INT DEFAULT NULL');
        $this->addSql('ALTER TABLE rate CHANGE offre_id offre_id INT DEFAULT NULL, CHANGE user_id user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE reponserec CHANGE id id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE reservation CHANGE evenementId evenementId INT DEFAULT NULL, CHANGE idUsers idUsers INT DEFAULT NULL');
        $this->addSql('ALTER TABLE role CHANGE id_user id_user INT DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE answers DROP FOREIGN KEY FK_50D0C606E62CA5DB');
        $this->addSql('ALTER TABLE answers CHANGE id_question id_question INT NOT NULL');
        $this->addSql('ALTER TABLE answers ADD CONSTRAINT fk_question_answers FOREIGN KEY (id_question) REFERENCES questions (id_question) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE commentaire CHANGE user_id user_id INT NOT NULL, CHANGE offre_id offre_id INT NOT NULL');
        $this->addSql('ALTER TABLE demande CHANGE id_client id_client INT NOT NULL');
        $this->addSql('ALTER TABLE offre CHANGE user_id user_id INT NOT NULL');
        $this->addSql('ALTER TABLE proposition CHANGE id_demande id_demande INT NOT NULL, CHANGE id_freelancer id_freelancer INT NOT NULL');
        $this->addSql('ALTER TABLE questions CHANGE id_quiz id_quiz INT NOT NULL');
        $this->addSql('ALTER TABLE rate CHANGE user_id user_id INT NOT NULL, CHANGE offre_id offre_id INT NOT NULL');
        $this->addSql('ALTER TABLE reponserec CHANGE id id INT NOT NULL');
        $this->addSql('ALTER TABLE reservation CHANGE idUsers idUsers INT NOT NULL, CHANGE evenementId evenementId INT NOT NULL');
        $this->addSql('ALTER TABLE role CHANGE id_user id_user INT NOT NULL');
    }
}
