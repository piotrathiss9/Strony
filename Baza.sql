CREATE TABLE Users(
name TEXT NOT NULL,
email TEXT NOT NULL,
pasw TEXT NOT NULL,
nick TEXT NOT NULL,
nazwisko TEXT NOT NULL);

INSERT INTO Users
(name,
 email,
 pasw,
 nick,
 nazwisko)
 VALUES
 ("Adam",
 "adam@poczta.com",
 "Haslo123",
 "Adusz",
 "Wiercicki");