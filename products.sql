CREATE TABLE products
(
    id            INT AUTO_INCREMENT PRIMARY KEY,
    title         VARCHAR(255) NOT NULL,
    image_url     TEXT         NOT NULL,
    description   TEXT         NOT NULL,
    price_per_day INT          NOT NULL,
    category      VARCHAR(100),
    availability  VARCHAR(50)
);

INSERT INTO products (title, image_url, description, price_per_day, category, availability)
VALUES ('SteffenKlein Herren Anzug',
        'https://media.cdn.kaufland.de/product-images/1024x1024/7646b770598497d8c21224ce745bc697.jpg',
        'Regular Fit', 10, 'Anzug', 'Sofort verfügbar');
INSERT INTO products (title, image_url, description, price_per_day, category, availability)
VALUES ('Boss Herren Anzug',
        'https://img.modivo.cloud/product(c/1/a/d/c1ad49295bb2da49d0bc7e4f0cd10aae93b94be3_02_4063539871325_AM.jpg,jpg)/boss-anzug-h-jeckson-3pcs-241-50509549-beige-regular-fit-0000303641191.jpg',
        'Beige Regular Fit', 20, 'Anzug', 'Sofort verfügbar');
INSERT INTO products (title, image_url, description, price_per_day, category, availability)
VALUES ('Bolf Herren Anzug',
        'https://static5.bolf.de/ger_pl_Bolf-Herren-Anzug-Schwarz-02-95289_2.jpg',
        'Schwarz', 15, 'Anzug', 'Sofort verfügbar');
INSERT INTO products (title, image_url, description, price_per_day, category, availability)
VALUES ('JOOP! Herren Anzug',
        'https://product.fidcdn.net/cdn-cgi/image/f=auto,width=400,quality=90/756l4iil74qjil28996kgiqm6sp4igi665b56g9o9l9l4hpn68qjeg9p855kqc1m6ksl6iqk8t7k8i2k853mcopic8p34chpcdi30cpkc8oj2e31ccr3gdhnc8q3ge9kcopm2co.jpg',
        'Beige, Slim Fit mit 2-Knopf-Sakko', 25, 'Anzug', 'Sofort verfügbar');