<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230409223115 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE answers DROP FOREIGN KEY fk_question_answers');
        $this->addSql('DROP INDEX fk_quiz_answers ON answers');
        $this->addSql('ALTER TABLE answers DROP FOREIGN KEY fk_question_answers');
        $this->addSql('ALTER TABLE answers CHANGE id_question id_question INT DEFAULT NULL');
        $this->addSql('ALTER TABLE answers ADD CONSTRAINT FK_50D0C606E62CA5DB FOREIGN KEY (id_question) REFERENCES questions (id_question)');
        $this->addSql('DROP INDEX fk_question_answers ON answers');
        $this->addSql('CREATE INDEX IDX_50D0C606E62CA5DB ON answers (id_question)');
        $this->addSql('ALTER TABLE answers ADD CONSTRAINT fk_question_answers FOREIGN KEY (id_question) REFERENCES questions (id_question) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE commentaire CHANGE offre_id offre_id INT DEFAULT NULL, CHANGE user_id user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE demande CHANGE id_client id_client INT DEFAULT NULL, CHANGE created_at created_at DATETIME DEFAULT \'current_timestamp()\' NOT NULL');
        $this->addSql('ALTER TABLE offre CHANGE user_id user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE proposition CHANGE id_demande id_demande INT DEFAULT NULL, CHANGE id_freelancer id_freelancer INT DEFAULT NULL');
        $this->addSql('ALTER TABLE questions DROP FOREIGN KEY questions_fk');
        $this->addSql('ALTER TABLE questions CHANGE id_quiz id_quiz INT DEFAULT NULL');
        $this->addSql('DROP INDEX questions_fk ON questions');
        $this->addSql('CREATE INDEX IDX_8ADC54D52F32E690 ON questions (id_quiz)');
        $this->addSql('ALTER TABLE questions ADD CONSTRAINT questions_fk FOREIGN KEY (id_quiz) REFERENCES quizs (id_quiz)');
        $this->addSql('ALTER TABLE quizs CHANGE score score VARCHAR(255) DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE rate CHANGE offre_id offre_id INT DEFAULT NULL, CHANGE user_id user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE reponserec CHANGE id id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE reservation CHANGE evenementId evenementId INT DEFAULT NULL, CHANGE idUsers idUsers INT DEFAULT NULL');
        $this->addSql('ALTER TABLE role CHANGE id_user id_user INT DEFAULT NULL, CHANGE role_name role_name VARCHAR(255) DEFAULT \'NULL\', CHANGE skills skills VARCHAR(255) DEFAULT \'NULL\', CHANGE experience experience VARCHAR(255) DEFAULT \'NULL\', CHANGE entreprise entreprise VARCHAR(255) DEFAULT \'NULL\', CHANGE langage_de_programmation langage_de_programmation VARCHAR(255) DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE users CHANGE created_at created_at DATETIME DEFAULT \'current_timestamp()\' NOT NULL, CHANGE srcimage srcimage VARCHAR(500) DEFAULT \'NULL\'');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE messenger_messages');
        $this->addSql('ALTER TABLE answers DROP FOREIGN KEY FK_50D0C606E62CA5DB');
        $this->addSql('ALTER TABLE answers DROP FOREIGN KEY FK_50D0C606E62CA5DB');
        $this->addSql('ALTER TABLE answers CHANGE id_question id_question INT NOT NULL');
        $this->addSql('ALTER TABLE answers ADD CONSTRAINT fk_question_answers FOREIGN KEY (id_question) REFERENCES questions (id_question) ON DELETE CASCADE');
        $this->addSql('CREATE INDEX fk_quiz_answers ON answers (id_quiz)');
        $this->addSql('DROP INDEX idx_50d0c606e62ca5db ON answers');
        $this->addSql('CREATE INDEX fk_question_answers ON answers (id_question)');
        $this->addSql('ALTER TABLE answers ADD CONSTRAINT FK_50D0C606E62CA5DB FOREIGN KEY (id_question) REFERENCES questions (id_question)');
        $this->addSql('ALTER TABLE commentaire CHANGE user_id user_id INT NOT NULL, CHANGE offre_id offre_id INT NOT NULL');
        $this->addSql('ALTER TABLE demande CHANGE id_client id_client INT NOT NULL, CHANGE created_at created_at DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL');
        $this->addSql('ALTER TABLE offre CHANGE user_id user_id INT NOT NULL');
        $this->addSql('ALTER TABLE proposition CHANGE id_demande id_demande INT NOT NULL, CHANGE id_freelancer id_freelancer INT NOT NULL');
        $this->addSql('ALTER TABLE questions DROP FOREIGN KEY FK_8ADC54D52F32E690');
        $this->addSql('ALTER TABLE questions CHANGE id_quiz id_quiz INT NOT NULL');
        $this->addSql('DROP INDEX idx_8adc54d52f32e690 ON questions');
        $this->addSql('CREATE INDEX questions_fk ON questions (id_quiz)');
        $this->addSql('ALTER TABLE questions ADD CONSTRAINT FK_8ADC54D52F32E690 FOREIGN KEY (id_quiz) REFERENCES quizs (id_quiz)');
        $this->addSql('ALTER TABLE quizs CHANGE score score VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE rate CHANGE user_id user_id INT NOT NULL, CHANGE offre_id offre_id INT NOT NULL');
        $this->addSql('ALTER TABLE reponserec CHANGE id id INT NOT NULL');
        $this->addSql('ALTER TABLE reservation CHANGE evenementId evenementId INT NOT NULL, CHANGE idUsers idUsers INT NOT NULL');
        $this->addSql('ALTER TABLE role CHANGE id_user id_user INT NOT NULL, CHANGE role_name role_name VARCHAR(255) DEFAULT NULL, CHANGE skills skills VARCHAR(255) DEFAULT NULL, CHANGE experience experience VARCHAR(255) DEFAULT NULL, CHANGE entreprise entreprise VARCHAR(255) DEFAULT NULL, CHANGE langage_de_programmation langage_de_programmation VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE users CHANGE created_at created_at DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL, CHANGE srcimage srcimage VARCHAR(500) DEFAULT NULL');
    }
}
