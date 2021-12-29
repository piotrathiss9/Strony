CREATE TABLE Users(
name TEXT NOT NULL,
email TEXT NOT NULL,
pasw TEXT NOT NULL,
nick TEXT NOT NULL,
nazwisko TEXT NOT NULL,
eqw TEXT NOT NULL);

INSERT INTO Users
(name,
 email,
 pasw,
 nick,
 nazwisko,
 eqw)
 VALUES
 ("Kilian",
 "K.gru@gmail.com",
 "Kilian123",
 "Admin",
 "Grudziński",
 "ADMIN"),

 ("Piotr",
 "ppicek14a@gmail.com",
 "LubieDJ123",
 "Admin",
 "Picek",
 "ADMIN"),

  ("Filip",
  "filip@gmail.com",
  "Filip123",
  "Admin",
  "Sienicki",
  "ADMIN");