-- Drop tables if they exist
DROP TABLE IF EXISTS event_registration;
DROP TABLE IF EXISTS event;

-- Create new tables and insert data
CREATE TABLE event (
  id INT(4) UNSIGNED PRIMARY KEY NOT NULL AUTO_INCREMENT,
  name VARCHAR(128) NOT NULL,
  date DATETIME NOT NULL,
  location VARCHAR(255) NOT NULL,
  add_date DATETIME NOT NULL,
  edit_date DATETIME NULL
) ENGINE=InnoDb;

INSERT INTO event
  (name, date, location, add_date)
  VALUES
    ('Dinner', '2016-02-12 17:45:00', 'Cafe Rio, Glendale, CO', NOW()),
    ('Swing Dancing - Lindy Hop', '2016-02-12 19:00:00', 'Denver Turnverein, Denver, CO', NOW()),
    ('Brunch', '2016-02-13 11:00:00', 'HuHot Mongolian Grill, Sheridan, CO', NOW()),
    ('Wedding', '2016-02-14 13:00:00', 'Littleton Christian Church, Littleton, CO', NOW());

CREATE TABLE event_registration (
  id INT(8) UNSIGNED PRIMARY KEY NOT NULL AUTO_INCREMENT,
  event_id INT(4) UNSIGNED NOT NULL,
  FOREIGN KEY (event_id) REFERENCES event(id) ON UPDATE CASCADE ON DELETE CASCADE,
  name VARCHAR(128) NOT NULL,
  guests INT(2) NOT NULL DEFAULT 0,
  add_date DATETIME NOT NULL,
  edit_date DATETIME NULL
) ENGINE=InnoDB;

INSERT INTO event_registration
  (event_id, name, guests, add_date)
    VALUES
      (1, 'Alonzi Alonzo', 1, NOW()),
      (1, 'Billie Piper', 1, NOW()),
      (1, 'Christopher Eccleston', 2, NOW()),
      (1, 'David Tennant', 5, NOW()),
      (2, 'Billie Piper', 1, NOW()),
      (2, 'David Tennant', 1, NOW()),
      (3, 'Alonzi Alonzo', 1, NOW()),
      (3, 'Christopher Eccleston', 1, NOW()),
      (3, 'David Tennant', 1, NOW()),
      (4, 'Billie Piper', 2, NOW()),
      (4, 'Catherine Tate', 1, NOW()),
      (4, 'David Tennant', 4, NOW());
