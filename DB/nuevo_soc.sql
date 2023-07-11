-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-07-2023 a las 14:53:49
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `nuevo_soc`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `galeria_bancos`
--

CREATE TABLE `galeria_bancos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `rel_id` int(11) NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `galeria_bancos`
--

INSERT INTO `galeria_bancos` (`id`, `rel_id`, `img`, `url`, `alt`, `created_at`, `updated_at`) VALUES
(1, 1, 'Afirme.png', 'https://www.afirme.com/afirme', 'Logotipo Banco Afirme', NULL, NULL),
(2, 1, 'Banorte.png', 'https://www.banorte.com/', 'Logotipo banco Banorte', NULL, NULL),
(3, 1, 'Bx+.png', 'https://www.vepormas.com/', 'Logotipo Seguros Ve por más', NULL, NULL),
(4, 1, 'Citibanamex.png', 'https://www.banamex.com/', 'Logotipo Banco CityBanamex', NULL, NULL),
(5, 1, 'Mifel.png', 'https://www.mifel.com.mx/', 'Logotipo Banca Mifel', NULL, NULL),
(6, 1, 'Hey_banco.png', 'https://banco.hey.inc/', 'Logotipo banco Hey, Banco', NULL, NULL),
(7, 1, 'iBAN.png', 'https://www.ibanonline.com.mx/', 'Logotipo banco iBAN', NULL, NULL),
(8, 1, 'Ion.png', 'https://www.ion.com.mx/', 'Logotipo banco Ion', NULL, NULL),
(9, 1, 'Hsbc.png', 'https://www.hsbc.com.mx/', 'Logotipo banco HSBC', NULL, NULL),
(10, 1, 'Santander.png', 'https://www.santander.com.mx/', 'Logotipo Banco Santander', NULL, NULL),
(11, 1, 'Scotiabank.png', 'https://www.scotiabank.com.mx/', 'Logotipo Banco Scotiabank', NULL, NULL),
(12, 1, 'Tu_Casa_Express.png', 'https://tucasaexpress.mx/', 'Logotipo Banco Tu Casa Express', NULL, NULL),
(13, 1, 'Yave.png', 'https://yave.mx/', 'Logotipo Banco Yave', NULL, NULL),
(14, 2, 'Active_Leasing.png', 'https://activeleasing.com.mx/', 'Logotipo Banco Active Leasing', NULL, NULL),
(15, 2, 'Afirme.png', 'https://www.afirme.com/afirme', 'Logotipo Banco Afirme ', NULL, NULL),
(16, 2, 'Anticipa.png', 'http://www.anticipa.com.mx/', 'Logotipo Banco Anticipa ', NULL, NULL),
(17, 2, 'Banorte.png', 'https://www.banorte.com/', 'Logotipo banco Banorte', NULL, NULL),
(18, 2, 'Bien_para_bien.png', 'https://bienparabien.com/', 'Logotipo Bien para Bien', NULL, NULL),
(19, 2, 'Bx+.png', 'https://www.vepormas.com/', 'Logotipo Seguros Ve por más', NULL, NULL),
(20, 2, 'Covalto.png', 'https://covalto.com/', 'Logotipo Covalto', NULL, NULL),
(21, 2, 'Creze.png', 'https://www.creze.com/', 'Logotipo financiera Creze', NULL, NULL),
(22, 2, 'Factor_express.png', 'https://factorexpres.com/', 'Logotipo Factor Express', NULL, NULL),
(23, 2, 'Hey_banco.png', 'https://banco.hey.inc/', 'Logotipo banco Hey, Banco', NULL, NULL),
(24, 2, 'Ion.png', 'https://www.ion.com.mx/', 'Logotipo banco Ion', NULL, NULL),
(25, 2, 'iBAN.png', 'https://www.ibanonline.com.mx/', 'Logotipo banco iBAN', NULL, NULL),
(26, 2, 'Jeeves.png', 'https://www.tryjeeves.com/es/', 'Logotipo Jeeves', NULL, NULL),
(27, 2, 'konfio.png', 'https://konfio.mx/', 'Logotipo Bankonfio', NULL, NULL),
(28, 2, 'Portafolio_de_negocios.png', 'https://www.portafoliodenegocios.com.mx/', 'Logotipo Portafolio de Negocios', NULL, NULL),
(29, 2, 'Tu_Casa_Express.png', 'https://tucasaexpress.mx/', 'Logotipo Banco Tu Casa Express', NULL, NULL),
(30, 3, 'GMX_seguros.png', 'https://www.gmx.com.mx/', 'Logotipo aseguradora GMX', NULL, NULL),
(31, 3, 'Zurich.png', 'https://www.zurich.com.mx/es-mx', 'Logotipo Zurich', NULL, NULL),
(32, 3, 'Sura.png', 'https://www.suramexico.com/home/', 'Logotipo Sura México', NULL, NULL),
(33, 3, 'Gnp_seguros.png', 'https://www.gnp.com.mx/', 'Logotipo aseguradora GNP', NULL, NULL),
(34, 3, 'MetLife.png', 'https://www.metlife.com.mx/', 'Logotipo MetLife', NULL, NULL),
(35, 3, 'Qualitas.png', 'https://www.qualitas.com.mx/web/qmx/inicio', 'Logotipo Seguros Qualitas', NULL, NULL),
(36, 3, 'Skandia.png', 'https://www.skandia.com.mx/', 'Logotipo aseguradora Skandia', NULL, NULL),
(37, 3, 'Axa.png', 'https://axa.mx/', 'Logotipo aseguradora Axa', NULL, NULL),
(38, 3, 'Ana_seguros.png', 'https://anaseguros.com.mx/', 'Logotipo Ana Seguros', NULL, NULL),
(39, 6, 'Afirme.png', 'https://www.afirme.com/afirme', 'Logotipo Banco Afirme ', NULL, NULL),
(40, 6, 'Hsbc.png', 'https://www.hsbc.com.mx/', 'Logotipo banco HSBC', NULL, NULL),
(41, 6, 'Hey_banco.png', 'https://banco.hey.inc/', 'Logotipo banco Hey, Banco', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lineas_negocios`
--

CREATE TABLE `lineas_negocios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `lineas_negocios`
--

INSERT INTO `lineas_negocios` (`id`, `nombre`, `parent`, `created_at`, `updated_at`) VALUES
(1, 'Credito Hipotecario', '0', NULL, NULL),
(2, 'Crédito Empresarial', '0', NULL, NULL),
(3, 'Seguro', '0', NULL, NULL),
(4, 'Personas', '3', NULL, NULL),
(5, 'Empresas', '3', NULL, NULL),
(6, 'Crédito de auto', '0', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_06_24_153207_productos', 1),
(6, '2023_06_24_155335_lineas_negocio', 1),
(8, '2023_06_24_153207_galeria_bancos', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_linea_negocio` int(11) NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitulo` tinytext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `resumen` tinytext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `miniatura` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `form` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cta` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cta_link` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `id_linea_negocio`, `url`, `nombre`, `subtitulo`, `resumen`, `miniatura`, `banner`, `description`, `description_2`, `form`, `cta`, `cta_description`, `cta_link`, `created_at`, `updated_at`) VALUES
(1, 1, 'adquisicion-de-vivienda', 'Adquisición de vivienda', '', 'Compra la casa que deseas con el crédito de adquisición. Nosotros te asesoramos sobre el proceso.', 'adquisiciondevivienda.jpg', '', '            <p>Conoce el crédito de adquisición de vivienda y compra la casa que deseas, nueva o usada. Te acompañamos hasta la entrega de las llaves de tu casa.</p>\r\n            <br><br>\r\n            <h3>Beneficios:</h3>\r\n            <ul>\r\n                <li>Si eres asalariado, podrás usar tu crédito INFONAVIT (Apoyo Infonavit o Cofinavit) o FOVISSSTE para todos.</li>\r\n                <li>Si cuentas con 30% del enganche, tienes la posibilidad de acceder a condiciones preferenciales, dependiendo de cada institución financiera.</li>\r\n                <li>Al contratar tu crédito hipotecario, contarás con un seguro de vida y un seguro de daños durante toda la vida del crédito.</li>\r\n                <li>Podrás deducir los intereses reales del crédito hipotecario.</li>\r\n                <li>Este crédito es combinable con un crédito de renovación. (1)\r\n                    <br><br>\r\n                    <small>(1) Solo con Scotiabank</small> \r\n                </li>\r\n            </ul>\r\n            <h3>¿Por qué asesorarse con SOC?:</h3>\r\n            <ul>\r\n                <li>Ayudamos a cambiar vidas a través de nuestra asesoría. Estamos comprometidos en encontrar el mejor producto financiero para ti.</li>\r\n                <li>Nos ajustamos al horario que sea más cómodo para ti, presencial o digital.</li>\r\n                <li>Te acompañamos en cada paso del proceso para que tengas mayor certidumbre y tranquilidad durante el trámite. Todo esto sin ningún costo.</li>\r\n                <li>Todas las opciones de financiamiento en un solo lugar.</li>\r\n                <li>Nuestro servicio no tiene costo para ti porque lo cubre el banco que hayas elegido.</li>\r\n            </ul>', '', '56ec9fdd-82bc-4211-8d9a-4c3cd7f1982b', '', '', '', NULL, NULL),
(2, 1, 'construccion', 'Construcción', '', 'Construye tu casa con el apoyo de un crédito hipotecario. Tu terreno quedará como garantía.', 'construccion.jpg', '', '            <p>Construye tu casa con el apoyo de un crédito hipotecario. Tu terreno quedará como garantía y podrás obtener hasta 100% del presupuesto de obra sin exceder el 70% del valor total final del inmueble.</p>\r\n            <br><br>\r\n            <p>Beneficios:</p>\r\n            <ul>\r\n                <li>Diseña tu hogar tal y como lo quieres según tus gustos y tus necesidades.</li>\r\n                <li>La mayoría de las instituciones no requieren que cuentes con un avance mínimo de obra.</li>\r\n                <li>Aplica con Apoyo Infonavit.</li>\r\n                <li>Si el terreno se encuentra dentro de un desarrollo residencial en zona de alta plusvalía, el banco te puede otorgar hasta 90% del financiamiento para su compra.\r\n                    <br><br>\r\n                    <small>Solo con Hey, Banco.</small> \r\n                </li>\r\n            </ul>\r\n            <h3>Requisitos y condiciones:</h3>\r\n            <ul>\r\n                <li>En la mayoría de los casos, el financiamiento se entrega en parcialidades (ministraciones), según el avance de la obra.</li>\r\n                <li>El banco puede realizar visitas para supervisar que los recursos son invertidos en la construcción del inmueble y se cuenta con un tiempo establecido para terminar la construcción.</li>\r\n                <li>En algunas instituciones financieras es necesario que contar con una parte de los recursos económicos para la construcción.</li>\r\n                <li>El terreno queda como garantía ante la institución que otorga el financiamiento.</li>\r\n            </ul>\r\n            <h3>¿Por qué asesorarse con SOC?:</h3>\r\n            <ul>\r\n                <li>Ayudamos a cambiar vidas a través de nuestra asesoría. Estamos comprometidos en encontrar el mejor producto financiero para ti.</li>\r\n                <li>Nos ajustamos al horario que sea más cómodo para ti, presencial o digital.</li>\r\n                <li>Te acompañamos en cada paso del proceso para que tengas mayor certidumbre y tranquilidad durante el trámite. Todo esto sin ningún costo.</li>\r\n                <li>Todas las opciones de financiamiento en un solo lugar.</li>\r\n                <li>Nuestro servicio no tiene costo para ti porque lo cubre el banco que hayas elegido.</li>\r\n            </ul>', '', '56ec9fdd-82bc-4211-8d9a-4c3cd7f1982b', '', '', '', NULL, NULL),
(3, 1, 'cambio-de-hipoteca', 'Mejora de hipoteca', '', 'Cambia tu hipoteca actual a otro banco que te ofrezca mejores condiciones y obtén ahorros.', 'mejoradehipoteca.jpg', '', '            <p>Obtén ahorros, baja la mensualidad o el plazo de tu hipoteca actual, cambiando a un banco que te ofrezca mejores condiciones; sólo requieres no presentar atrasos en el pago de las mensualidades y que el origen de tu financiamiento sea por adquisición, remodelación o construcción.</p>             <br>             <p>Es recomendable que tengas al menos 12 meses con el crédito hipotecario que deseas cambiar.</p>             <br><br>             <h3>Beneficios:</h3>             <ul>                 <li>Reducción en el monto de la mensualidad, tasa de interés, plazo o pago total del crédito.</li>                 <li>Se puede obtener alguno de los siguientes beneficios: 0% de comisión por apertura, avalúo sin costo o el financiamiento de los gastos de escrituración.</li>                 <li>Deducibilidad de los intereses reales del crédito hipotecario.</li>                 <li>Aplica con Apoyo Infonavit y Cofinavit.</li>                 <li>Si su nueva mensualidad es menor a la que venía pagando, puede exentar la comprobación de ingresos. (1).</li>                 <span>(1) Aplica sólo con algunas instituciones financieras.</span>             </ul>             <h3>¿Por qué asesorarse con SOC?:</h3>             <ul>                 <li>Ayudamos a cambiar vidas a través de nuestra asesoría. Estamos comprometidos en encontrar el mejor producto financiero para ti.</li>                 <li>Nos ajustamos al horario que sea más cómodo para ti, presencial o digital.</li>                 <li>Te acompañamos en cada paso del proceso para que tengas mayor certidumbre y tranquilidad durante el trámite. Todo esto sin ningún costo.</li>                 <li>Todas las opciones de financiamiento en un solo lugar.</li>                 <li>Nuestro servicio no tiene costo para ti porque lo cubre el banco que hayas elegido.</li>             </ul>', '', '56ec9fdd-82bc-4211-8d9a-4c3cd7f1982b', '', '', '', NULL, NULL),
(4, 1, 'compra-de-terreno', 'Adquisición de terreno', '', 'Compra un terreno en una zona urbanizada y construye tu casa a tu gusto y tus necesidades.', 'adquisiciondeterreno.jpg', '', '            <p>Compra un terreno en la zona de tu interés, solo necesitas un 30% del valor del predio y si éste se encuentra en una zona de alta plusvalía, te pueden prestar hasta el 90% del financiamiento para su compra.</p>\r\n            <br><br>\r\n            <p>Requisitos y condiciones:</p>\r\n            <p>El terreno deberá contar con las características de urbanización y habitabilidad básicas que establezca el banco (como servicios de: suministro de energía eléctrica, abastecimiento y evacuación de agua a través de la red pública, etcétera).</p>\r\n            <br>\r\n            <p>El cliente deberá contar con una parte del valor del terreno para cubrir su costo total (30% aproximadamente).</p>\r\n            <br>\r\n            <p>Por qué asesorarse con SOC:</p>\r\n            <ul>\r\n                <li>Ayudamos a cambiar vidas a través de nuestra asesoría. Estamos comprometidos en encontrar el mejor producto financiero para ti.</li>\r\n                <li>Nos ajustamos al horario que sea más cómodo para ti, presencial o digital.</li>\r\n                <li>Te acompañamos en cada paso del proceso para que tengas mayor certidumbre y tranquilidad durante el trámite. Todo esto sin ningún costo.</li>\r\n                <li>Todas las opciones de financiamiento en un solo lugar.</li>\r\n                <li>Nuestro servicio no tiene costo para ti porque lo cubre el banco que hayas elegido.</li>\r\n            </ul>', '', '56ec9fdd-82bc-4211-8d9a-4c3cd7f1982b', '', '', '', NULL, NULL),
(6, 1, 'terreno-y-construccion', 'Terreno + Crédito de construcción', '', 'Compra tu terreno y construye tu casa a tu medida. Puedes obtener hasta el 100% del presupuesto destinado a la obra.', 'terrenoconstruccion.jpg', '', '            <p>Compra un terreno y construye una casa a tu medida a través de un crédito hipotecario. Puedes obtener hasta 100% del presupuesto destinado a la obra y 50% del valor del terreno.<br>Inicia hoy tu proyecto con un crédito construcción.</p>\r\n            <br><br>\r\n            <h3>Beneficios:</h3>\r\n            <ul>\r\n                <li>Diseñar una casa a tu gusto y tus necesidades.</li>\r\n                <li>Puedes obtener hasta el 100% del presupuesto de obra.(1)</li>\r\n                <li>La comisión por apertura puede ser financiada.(2)</li>\r\n                <li>Aplica con Apoyo Infonavit.(2)</li>\r\n                <li>Disfruta de bajos costos en los gastos notariales.\r\n                    <br><br>\r\n                    <small>(1) Sin exceder el financiamiento máximo, establecido por la institución, del valor total del inmueble (terreno + construcción).</small> <br>\r\n                    <small>(2) Estos beneficios varían de acuerdo a la institución financiera con la que se contrate el crédito.</small>\r\n                </li>\r\n            </ul>\r\n            <h3>Requisitos y condiciones:</h3>\r\n            <p>Es importante contar con el presupuesto de obra junto con el desglose de las actividades a realizar, así como el permiso y la licencia de construcción vigente. El cliente deberá contar con al menos el 50% del valor del terreno.</p>\r\n            <p>Este tipo de crédito se otorga por medio de ministraciones, es decir, los recursos se otorgarán en parcialidades de acuerdo al avance de obra. El número de ministraciones lo determinará cada institución financiera.</p>\r\n            <p>La disposición de las ministraciones correspondientes podrá efectuarse bajo una supervisión de obra.</p>\r\n            <p>El plazo máximo para disponer las ministraciones es establecido por cada institución. Por cada ministración entregada se aplicará una comisión. El monto o porcentaje de dicha comisión varía en cada banco.</p>\r\n            <br>\r\n            <p>¿Por qué asesorarse con SOC?:</p>\r\n            <ul>\r\n                <li>Ayudamos a cambiar vidas a través de nuestra asesoría. Estamos comprometidos en encontrar el mejor producto financiero para ti.</li>\r\n                <li>Nos ajustamos al horario que sea más cómodo para ti, presencial o digital.</li>\r\n                <li>Te acompañamos en cada paso del proceso para que tengas mayor certidumbre y tranquilidad durante el trámite. Todo esto sin ningún costo.</li>\r\n                <li>Todas las opciones de financiamiento en un solo lugar.</li>\r\n                <li>Nuestro servicio no tiene costo para ti porque lo cubre el banco que hayas elegido.</li>\r\n            </ul>\r\n', '', '56ec9fdd-82bc-4211-8d9a-4c3cd7f1982b', '', '', '', NULL, NULL),
(7, 1, 'preventa', 'Preventa', '', 'Adquiere tu casa o departamento en preventa con un crédito hipotecario. Obtendrás un mejor precio del inmueble.', 'preventa.jpg', '', '            <p>Adquiere tu casa o departamento en preventa con un crédito hipotecario. Tendrás la ventaja de conseguir un mejor precio del inmueble y un incremento en la plusvalía de éste. Además, los gastos notariales pueden disminuir considerablemente ya que se puede escriturar en obra negra. </p>\r\n            <br><br>\r\n            <h3>Beneficios:</h3>\r\n            <ul>\r\n                <li>Podrás contar con la aprobación del crédito antes de que el inmueble sea terminado.</li>\r\n                <li>Deducibilidad de los intereses reales del crédito hipotecario.</li>\r\n                <li>Aplica con Apoyo Infonavit y Cofinavit.(1)</li>\r\n                <span>(1) El esquema de Cofinavit solo aplica para algunas instituciones.</span>\r\n            </ul>\r\n            <h3>Requisitos y condiciones:</h3>\r\n            <ul>\r\n                <li>La disposición del crédito estará efectuada por ministraciones de acuerdo al avance de la obra.</li>\r\n                <li>Se aplica una comisión por las ministraciones dispuestas.</li>\r\n                <li>Para otorgar este crédito es necesario que la desarrolladora o constructora esté avalada por el banco.</li>\r\n            </ul>\r\n            <p>¿Por qué asesorarse con SOC?:</p>\r\n            <ul>\r\n                <li>Ayudamos a cambiar vidas a través de nuestra asesoría. Estamos comprometidos en encontrar el mejor producto financiero para ti.</li>\r\n                <li>Nos ajustamos al horario que sea más cómodo para ti, presencial o digital.</li>\r\n                <li>Te acompañamos en cada paso del proceso para que tengas mayor certidumbre y tranquilidad durante el trámite. Todo esto sin ningún costo.</li>\r\n                <li>Todas las opciones de financiamiento en un solo lugar.</li>\r\n                <li>Nuestro servicio no tiene costo para ti porque lo cubre el banco que hayas elegido.</li>\r\n            </ul>', '', '56ec9fdd-82bc-4211-8d9a-4c3cd7f1982b', '', '', '', NULL, NULL),
(8, 1, 'liquidez', 'Liquidez', '', '¿Requieres liquidez para invertir en un negocio, hacer frente a una emergencia o liberarte de algunas deudas?', 'liquidez.jpg', '', '            <p>Liberarte de deudas, invertir en un negocio o emprender un nuevo proyecto nunca ha sido más fácil con un crédito de liquidez; sólo requieres ser dueño de un inmueble libre de gravamen a tu nombre el cual quedará como garantía de pago.</p>\r\n            <br><br>\r\n            <h3>Beneficios:</h3>\r\n            <ul>\r\n                <li>Tú decides en qué usar los recursos de este crédito.</li>\r\n                <li>El financiamiento otorgado dependerá del valor de la casa pudiendo alcanzar hasta el 70%.</li>\r\n                <li>Contarás con un seguro de vida y uno de daños durante la vigencia del crédito.</li>\r\n            </ul>\r\n            <h3>Requisitos y condiciones:</h3>\r\n            <ul>\r\n                <li>Contar con un inmueble libre de gravamen a tu nombre y, en algunos casos, puede ser a nombre de tu cónyuge.</li>\r\n                <li>El plazo máximo en este tipo de crédito es de hasta 15 años.</li>\r\n                <li>Este destino genera IVA sobre los intereses.</li>\r\n                <li>En caso de que el cliente ocupe los recursos para la consolidación de pasivos, algunos bancos le solicitarán la entrega de una carta compromiso que garantice la liquidación de las deudas.</li>\r\n            </ul>\r\n            <p></p>\r\n            <br>\r\n            <h3>¿Por qué asesorarse con SOC?:</h3>\r\n            <ul>\r\n                <li>Ayudamos a cambiar vidas a través de nuestra asesoría. Estamos comprometidos en encontrar el mejor producto financiero para ti.</li>\r\n                <li>Nos ajustamos al horario que sea más cómodo para ti, presencial o digital.</li>\r\n                <li>Te acompañamos en cada paso del proceso para que tengas mayor certidumbre y tranquilidad durante el trámite. Todo esto sin ningún costo.</li>\r\n                <li>Todas las opciones de financiamiento en un solo lugar.</li>\r\n                <li>Nuestro servicio no tiene costo para ti porque lo cubre el banco que hayas elegido.</li>\r\n            </ul>', '', '56ec9fdd-82bc-4211-8d9a-4c3cd7f1982b', '', '', '', NULL, NULL),
(9, 1, 'liquidez-y-sustitucion', 'Mejora de hipoteca + Liquidez', '', 'Cambia tu hipoteca de banco y obtén dinero adicional, recibirás liquidez para que lo ocupes en lo que requieras.', 'mejoradehipotecaliquidez.jpg', '', '            <p>Cambia tu hipoteca de banco y obtén dinero adicional. Las condiciones actuales de tu financiamiento mejoran con una tasa de interés más baja o un pago total menor; además, recibirás liquidez para que lo ocupes en lo que requieras.</p>\r\n            <br><br>\r\n            <h3>Beneficios:</h3>\r\n            <ul>\r\n                <li>Además de mejorar las condiciones de tu crédito hipotecario actual, puedes obtener financiamiento para liquidar deudas, hacer frente a una emergencia o cualquier otro proyecto en puerta que requiera liquidez.</li>\r\n                <li>Sin desembolso inicial al contar con la posibilidad de financiamiento para la comisión por apertura y los gastos notariales.</li>\r\n                <li>Deducibilidad de los intereses reales del crédito hipotecario.</li>\r\n            </ul>\r\n            <h3>Requisitos y condiciones:</h3>\r\n            <ul>\r\n                <li>Es recomendable que tengas al menos 12 meses con el crédito hipotecario que desea sustituir.</li>\r\n                <li>No presentar atrasos en el pago de las mensualidades del crédito.</li>\r\n                <li>El origen del crédito actual debe ser: adquisición, remodelación o construcción.</li>\r\n                <li>El monto correspondiente al crédito de liquidez puede emplearse con destino libre.</li>\r\n                <li>La suma del crédito de sustitución + el crédito de liquidez no podrá rebasar el 85% del valor de la vivienda. (1)\r\n                    <ul>\r\n                        <li>En el caso de Santander, la suma de ambos créditos no podrá superar el 70% del valor del inmueble.</li>\r\n                        <li>En el caso de Banorte, el producto que maneja es: Mejora de hipoteca + remodelación.</li>\r\n                    </ul>\r\n                </li>\r\n            </ul>\r\n            <h3>¿Por qué asesorarse con SOC?:</h3>\r\n            <ul>\r\n                <li>Ayudamos a cambiar vidas a través de nuestra asesoría. Estamos comprometidos en encontrar el mejor producto financiero para ti.</li>\r\n                <li>Nos ajustamos al horario que sea más cómodo para ti, presencial o digital.</li>\r\n                <li>Te acompañamos en cada paso del proceso para que tengas mayor certidumbre y tranquilidad durante el trámite. Todo esto sin ningún costo.</li>\r\n                <li>Todas las opciones de financiamiento en un solo lugar.</li>\r\n                <li>Nuestro servicio no tiene costo para ti porque lo cubre el banco que hayas elegido.</li>\r\n            </ul>\r\n', '', '56ec9fdd-82bc-4211-8d9a-4c3cd7f1982b', '', '', '', NULL, NULL),
(10, 1, 'renovacion-remodelacion', 'Renovación / Remodelación', '', 'Si ya eres dueño del inmueble, mejóralo con un crédito para renovación, remodelación o ampliación. Puedes obtener hasta el 50% de financiamiento.', 'remodelacion.jpg', '', '            <p>Si ya eres dueño del inmueble obtén un crédito para renovar, remodelar o ampliar. Puedes obtener hasta el 50% del valor actual de tu vivienda. </p>\r\n            <br><br>\r\n            <h3>Beneficios:</h3>\r\n            <ul>\r\n                <li>No requiere licencia de construcción, solo presupuesto de obra.</li>\r\n                <li>Los recursos otorgados pueden destinarse para trabajos de mantenimiento mayor, remodelación de acabados, cambio de instalaciones eléctricas, hidráulicas, sanitarias, cambios de cocina, ampliaciones o adecuaciones a la estructura de la vivienda.</li>\r\n                <li>Te pueden prestar hasta el 50% de financiamiento sobre el valor actual del inmueble.</li>\r\n                <li>Es combinable con un crédito de sustitución de hipoteca. (1)</li>            \r\n            </ul>            \r\n            <p>(1) Solo en algunas instituciones. <br><br></p>\r\n            <h3>¿Por qué asesorarse con SOC?:</h3>\r\n            <ul>\r\n                <li>Ayudamos a cambiar vidas a través de nuestra asesoría. Estamos comprometidos en encontrar el mejor producto financiero para ti.</li>\r\n                <li>Nos ajustamos al horario que sea más cómodo para ti, presencial o digital.</li>\r\n                <li>Te acompañamos en cada paso del proceso para que tengas mayor certidumbre y tranquilidad durante el trámite. Todo esto sin ningún costo.</li>\r\n                <li>Todas las opciones de financiamiento en un solo lugar.</li>\r\n                <li>Nuestro servicio no tiene costo para ti porque lo cubre el banco que hayas elegido.</li>\r\n            </ul>\r\n', '', '56ec9fdd-82bc-4211-8d9a-4c3cd7f1982b', '', '', '', NULL, NULL),
(11, 2, 'anticipo', 'Crédito como anticipo de ventas', NULL, 'Es un financiamiento que provee liquidez inmediata, con base en el historial de tus ventas con tarjetas bancarias.', 'anticipo.jpg', NULL, '<p>La aprobación de este financiamiento, a diferencia de un crédito tradicional, es mucho más rápido. La liquidez se otorga con base a las ventas del establecimiento que hayan sido registradas a través del pago con tarjeta de tus clientes.</p> <br><br> <h3>Sus principales características:</h3> <ul> <li> Flexible: El tiempo de pago y su costo único, el cual varía en función del porcentaje que hayas elegido destinar de tus ventas a la devolución del anticipo.</li> <li>Simple: Sin consulta de buró de crédito o estados financieros. Sin garantías ni avales.</li> <li>Sencillo: No afecta la capacidad crediticia, al ser un solo costo es 100% deducible. Los pagos son proporcionales a las ventas que tenga tu negocio.</li> </ul> <h3>Beneficios:</h3> <ul> <li>Puedes obtener desde quince días hasta mes y medio de ventas futuras.</li> <li>Devuelve el anticipo conforme vayas vendiendo.</li> <li>Este financiamiento no tiene un destino definido, es de uso libre.</li> </ul> <h3>¿Por qué asesorarse con SOC?:</h3> <ul> <li>Ayudamos a cambiar vidas a través de nuestra asesoría. Estamos comprometidos en encontrar el mejor producto financiero para ti.</li> <li>Nos ajustamos al horario que sea más cómodo para ti, presencial o digital.</li> <li>Te acompañamos en cada paso del proceso para que tengas mayor certidumbre y tranquilidad durante el trámite. Todo esto sin ningún costo.</li> <li>Más de 10 opciones de financiamiento en un solo lugar; tenemos la indicada para ti.</li> <li>Nuestro servicio no tiene costo para ti porque lo cubre la institución financiera que hayas elegido.</li> <li>Seguridad en el manejo de tu información.</li> </ul>', NULL, 'd5b8238a-5731-4bb0-a491-1abf614cd175', NULL, NULL, NULL, NULL, NULL),
(12, 2, 'simple', 'Crédito simple', NULL, 'Es un financiamiento que provee liquidez inmediata, con base en el historial de tus ventas con tarjetas bancarias.', 'asesoria_pyme.jpg', NULL, '<p>Es un crédito que tiene un plazo entre 3 y 5 años que te permitirá obtener los recursos necesarios para cumplir los objetivos de crecimiento de tu compañía.</p> <br><br> <h3>Puedes destinarlo a:</h3> <ul> <li>Inversión en activos fijos, por ejemplo modernizar las máquinas que se tienen actualmente, remodelar o reconstruir las instalaciones.</li> <li>Ampliación de la capacidad productiva para atender nuevos proyectos que exigen una mayor inversión de la que se tiene normalmente.</li> <li>Capital de trabajo y de inversión.</li> </ul> <br> <br> <h3>Beneficios:</h3> <ul> <li>Lo pueden obtener pequeñas y medianas empresas con solo 1 año de antigüedad.</li> <li>Tenemos opciones para Personas Morales o PFAE.</li> <li>Se cuentan con algunas soluciones si no cuentas con buen historial crediticio.</li> </ul> <h3>¿Por qué asesorarse con SOC?:</h3> <ul> <li>Ayudamos a cambiar vidas a través de nuestra asesoría. Estamos comprometidos en encontrar el mejor producto financiero para ti.</li> <li>Nos ajustamos al horario que sea más cómodo para ti, presencial o digital.</li> <li>Te acompañamos en cada paso del proceso para que tengas mayor certidumbre y tranquilidad durante el trámite. Todo esto sin ningún costo.</li> <li>Más de 10 opciones de financiamiento en un solo lugar; tenemos la indicada para ti.</li> <li>Nuestro servicio no tiene costo para ti porque lo cubre la institución financiera que hayas elegido.</li> <li>Seguridad en el manejo de tu información.</li> </ul>', NULL, 'd5b8238a-5731-4bb0-a491-1abf614cd175', NULL, NULL, NULL, NULL, NULL),
(13, 2, 'revolvente', 'Crédito revolvente', NULL, 'Es un financiamiento que provee liquidez inmediata, con base en el historial de tus ventas con tarjetas bancarias.', 'liquidez.jpg', NULL, '<p>Es una línea de crédito abierta de la cual puedes disponer una parte o la totalidad de los recursos autorizados. Es ideal para cubrir necesidades de corto plazo, y una de sus ventajas es que solo pagarás los intereses del monto que hayas dispuesto. </p> <br><br> <h3>Sus principales usos son:</h3> <ul> <li>Capital de trabajo: Para un uso de corto plazo, donde se requieren recursos financieros para cubrir rubros de manera inmediata.</li> <li>Aprovechamiento de oportunidades en el mercado: Ofertas de productos en pagos de contado o, por ejemplo, para la adquisición de mayor volumen de productos.</li> </ul> <br> <br> <h3>Beneficios:</h3> <ul> <li>Lo pueden obtener pequeñas y medianas empresas con solo 1 año de antigüedad.</li> <li>Tenemos opciones para Personas Morales o PFAE.</li> <li>Se cuentan con algunas soluciones si no cuentas con buen historial crediticio.</li> </ul> <h3>¿Por qué asesorarse con SOC?:</h3> <ul> <li>Ayudamos a cambiar vidas a través de nuestra asesoría. Estamos comprometidos en encontrar el mejor producto financiero para ti.</li> <li>Nos ajustamos al horario que sea más cómodo para ti, presencial o digital.</li> <li>Te acompañamos en cada paso del proceso para que tengas mayor certidumbre y tranquilidad durante el trámite. Todo esto sin ningún costo.</li> <li>Más de 10 opciones de financiamiento en un solo lugar; tenemos la indicada para ti.</li> <li>Nuestro servicio no tiene costo para ti porque lo cubre la institución financiera que hayas elegido.</li> <li>Seguridad en el manejo de tu información.</li> </ul>', NULL, 'd5b8238a-5731-4bb0-a491-1abf614cd175', NULL, NULL, NULL, NULL, NULL),
(14, 2, 'arrendamiento', 'Crédito arrendamiento', NULL, 'Es un financiamiento que provee liquidez inmediata, con base en el historial de tus ventas con tarjetas bancarias.', 'arrendamiento.jpg', NULL, '<p>Equipa tu negocio y hazlo más productivo con una solución de arrendamiento. Te permitirá la adquisición de bienes productivos y contar con una empresa moderna dirigido a un amplio número de industrias. En SOC tenemos distintas opciones financieras para ti.</p> <br> <p>Tu empresa solo requiere 1 año de antigüedad, buen desempeño crediticio en el Buró de Crédito, aunque también hay opciones para quienes no cumplen al 100% este punto. Se puede apoyar a una amplia variedad de industrias</p> <br><br> <h3>Beneficios</h3> <ul> <li>Creamos un traje a la medida, ya que el financiamiento se otorga en relación directa a las necesidades del cliente.</li> <li>Obtén la maquinaria o el equipo que necesitas para impulsar tu negocio sin detenerte y dejando en garantía el mismo equipo.</li> <li>Aprovecha la estrategia fiscal del arrendamiento y al final del plazo compra tu equipo o activo.</li> </ul> <br> <h3>Dirigido a:</h3> <ul> <li>Personas Morales.</li> <li>Personas Físicas con Actividad Empresarial (PFAE)</li> </ul> <br> <h3>¿Por qué asesorarse con SOC?:</h3> <ul> <li>Ayudamos a cambiar vidas a través de nuestra asesoría. Estamos comprometidos en encontrar el mejor producto financiero para ti.</li> <li>Nos ajustamos al horario que sea más cómodo para ti, presencial o digital.</li> <li>Te acompañamos en cada paso del proceso para que tengas mayor certidumbre y tranquilidad durante el trámite. Todo esto sin ningún costo.</li> <li>Más de 10 opciones de financiamiento en un solo lugar; tenemos la indicada para ti.</li> <li>Nuestro servicio no tiene costo para ti porque lo cubre la institución financiera que hayas elegido.</li> <li>Seguridad en el manejo de tu información.</li> </ul>', NULL, 'd5b8238a-5731-4bb0-a491-1abf614cd175', NULL, NULL, NULL, NULL, NULL),
(15, 2, 'hipotecario-empresarial', 'Crédito hipotecario empresarial', NULL, 'Es un financiamiento que provee liquidez inmediata, con base en el historial de tus ventas con tarjetas bancarias.', 'empre-2.jpg', NULL, '<p>Incrementa tu patrimonio al adquirir un bien inmueble como locales, oficinas, bodegas, terrenos industriales o comerciales. También, puedes remodelar o construir en un terreno propio.</p> <br><br> <h3>Beneficios:</h3> <ul> <li>No hay penalización por pagos anticipados.</li> <li>La tasa de interés es fija anual durante toda la vida del crédito.</li> <li>Asesoría sin costo de un experto en financiamiento para empresas.</li> </ul> <h3>¿Por qué asesorarse con SOC?:</h3> <ul> <li>Ayudamos a cambiar vidas a través de nuestra asesoría. Estamos comprometidos en encontrar el mejor producto financiero para ti.</li> <li>Nos ajustamos al horario que sea más cómodo para ti, presencial o digital.</li> <li>Te acompañamos en cada paso del proceso para que tengas mayor certidumbre y tranquilidad durante el trámite. Todo esto sin ningún costo.</li> <li>Más de 10 opciones de financiamiento en un solo lugar; tenemos la indicada para ti.</li> <li>Nuestro servicio no tiene costo para ti porque lo cubre la institución financiera que hayas elegido.</li> <li>Seguridad en el manejo de tu información.</li> </ul>', NULL, 'd5b8238a-5731-4bb0-a491-1abf614cd175', NULL, NULL, NULL, NULL, NULL),
(16, 2, 'tarjeta-credito', 'Tarjeta de crédito', NULL, 'Es un financiamiento que provee liquidez inmediata, con base en el historial de tus ventas con tarjetas bancarias.', 'tarjeta-credito-soc.jpg', NULL, '<p>Con la tarjeta de crédito dispones de un crédito revolvente para tu empresa. Está dirigida a personas físicas con actividad empresarial y personas morales para la adquisición de bienes que ayuden en tus actividades empresariales y/o como capital de trabajo para el desarrollo de tu negocio.</p> <br><br> <h3>Beneficios:</h3> <ul> <li>Cuenta con el respaldo de Visa.</li> <li>Seguro por pérdida de equipaje.</li> <li>Seguro por demora de equipaje.</li> <li>Seguro por protección de compra.</li> <li>Meses con y sin intereses según aplique.</li> <li>Pago por SPEI usando la línea de crédito.</li> <li>Alianza con WeWork.</li> <li>Adicionales sin costo.</li> <li>Posible exención del pago de anualidad.</li> <li>Tarjetas para empleados con límites de gasto establecidos.</li> <li>Control del gasto en tiempo real.</li> <li>Tarjeta digital que podrás usar desde su aprobación.</li> </ul> <h3>¿Por qué asesorarse con SOC?:</h3> <ul> <li>Ayudamos a cambiar vidas a través de nuestra asesoría. Estamos comprometidos en encontrar el mejor producto financiero para ti.</li> <li>Nos ajustamos al horario que sea más cómodo para ti, presencial o digital.</li> <li>Te acompañamos en cada paso del proceso para que tengas mayor certidumbre y tranquilidad durante el trámite. Todo esto sin ningún costo.</li> <li>Más de 10 opciones de financiamiento en un solo lugar; tenemos la indicada para ti.</li> <li>Nuestro servicio no tiene costo para ti porque lo cubre la institución financiera que hayas elegido.</li> <li>Seguridad en el manejo de tu información.</li> </ul>', NULL, 'd5b8238a-5731-4bb0-a491-1abf614cd175', NULL, NULL, NULL, NULL, NULL),
(17, 4, 'seguro-de-vida', 'Seguro de vida', NULL, NULL, NULL, NULL, '<p></p><h3>Retiro:</h3>¡Qué nada te detenga! Cumple los sueños que dejaste pendientes. Te ayudamos a desarrollar un plan de retiro de acuerdo con tu perfil de ahorro e inversión, para que vayas tomando acción de tu futuro. Aprovecha todos los beneficios fiscales y maximiza tu inversión.<p></p> <br><br> <p></p><h3>Educación:</h3> La clave de un futuro ideal para tu familia es la educación. Garantiza la educación universitaria de tu hijo iniciando un plan de aportaciones. Además, protégete de los imprevistos con un seguro de vida o invalidez y blinda tu dinero por medio de un fideicomiso. Recibe 3 beneficios en un sólo plan.<p></p> <br><br> <p></p><h3>Sueños:</h3> ¿Cuál es tu sueño? ¿Viajar por el mundo? ¿Ir a un mundial de fútbol? ¿Ser dueño de tu propio negocio? Nosotros estamos contigo para ayudarte a alcanzar tu meta. Nuestra asesoría integral te ayudará a realizar un diagnóstico para diseñar un plan de ahorro que incluye protección ante cualquier imprevisto con un seguro de vida e invalidez.<p></p> <br><br> <p></p><h3>Vida:</h3> Si llegas a hacer falta, tus seres queridos estarán protegidos económicamente como si tú estuvieras ahí cuidando de ellos. Contamos con las dos siguientes opciones:<p></p> <br><br> <ul> <li><strong>Seguro vida entera pagos limitados:</strong> es un seguro patrimonial que garantiza una indemnización a tu familia en caso de que llegues a faltar. Los plazos de pago pueden ser de 10, 15 ó 20 años, o bien al alcanzar los 65 años de edad. Lo puedes contratar en moneda nacional, UDIS o en dólares.</li> <li><strong>Seguros temporales:</strong> en caso de no contar con mucho presupuesto y tienes la necesidad de proteger a tu familia, puedes optar por un plan temporal que se caracteriza por su alta protección a bajo costo en plazos a 5, 10, 15 o 20 años. Lo puedes contratar en moneda nacional UDIS o en dólares.</li> </ul>', NULL, '5622ca1b-9e8c-40a4-bd89-e1fc8c18ec73', NULL, NULL, NULL, NULL, NULL),
(18, 4, 'gastos-medicos-mayores', 'Gastos médicos mayores', NULL, NULL, NULL, NULL, '<p>Están diseñados para brindar certidumbre al momento de enfrentar un evento que ponga en riesgo nuestra salud. Al contar con este plan, tendrás acceso a diferentes servicios y hasta la suma asegurada sin poner en riesgo el patrimonio familiar.</p> <br> <p>Los principales elementos a considerar al contratar un GMM son:</p> <br> <ul> <li>Deducible.</li> <li>Coaseguro.</li> <li>Nivel hospitalario.</li> <li>Suma asegurada.</li> <li>Honorarios quirúrgicos.</li> <li>Beneficio adicional: exención de deducible por accidente o emergencia en el extranjero.</li> </ul>', NULL, '5622ca1b-9e8c-40a4-bd89-e1fc8c18ec73', NULL, NULL, NULL, NULL, NULL),
(19, 4, 'proteccion-de-hogar', 'Protección del hogar', NULL, NULL, NULL, NULL, '<p>Nuestro hogar es el lugar donde podemos descansar y convivir con las personas que más amamos; también, es el patrimonio familiar, por ello, es importante protegerlo de algunos riesgos.</p> <br> <p>El seguro de protección al hogar, también cubre el menaje de casa y a tu familia por daños a terceros de los cuales sean responsables incluyendo tus mascotas y el personal doméstico.</p> <br> <h3>Coberturas:</h3> <br> <ul> <li>Incendio.</li> <li>Terremoto y riesgos hidrometeorológicos.</li> <li>Inundación.</li> <li>Daños a equipo electrónico y electrodomésticos.</li> <li>Robo.</li> <li>Rotura de cristales.</li> <li>Dinero y valores.</li> <li>Responsabilidad civil.</li> <li>Pérdidas consecuenciales y gastos extraordinarios como mudanzas o renta de un inmueble sino es posible habitar por un siniestro.</li> <li>Servicios de asistencia: cerrajería, plomería, ambulancia etc.<br>*Este producto está disponible como propietario o inquilino.</li> </ul>', NULL, '5622ca1b-9e8c-40a4-bd89-e1fc8c18ec73', NULL, NULL, NULL, NULL, NULL),
(20, 4, 'seguro-de-auto', 'Seguro de auto', NULL, NULL, NULL, NULL, '<p >Ampara tus vehículos automotores contra los siguientes riesgos:</p> <div> <p> <i class=\"bx bx-check\"></i> Robo Total. </p> <p> <i class=\"bx bx-check\"></i> Daños materiales. </p> <p> <i class=\"bx bx-check\"></i> Responsabilidad civil por daños a terceros. </p> <p> <i class=\"bx bx-check\"></i> Responsabilidad civil en el extranjero: Estados Unidos de América y Canadá. </p> <p> <i class=\"bx bx-check\"></i> Gastos médicos a ocupantes. </p> <p> <i class=\"bx bx-check\"></i> Asistencia vial. </p> <p> <i class=\"bx bx-check\"></i> Muerte del conductor. </p> </div> <p>Protegemos:</p> <div> <p> <i class=\"bx bx-check\"></i> Autos y pickup personales. </p> <p> <i class=\"bx bx-check\"></i> Camiones </p> <p> <i class=\"bx bx-check\"></i> Servicio Público de pasajeros. </p> <p> <i class=\"bx bx-check\"></i> Fronterizos y regularizados. </p> <p> <i class=\"bx bx-check\"></i> Turistas. </p> <p> <i class=\"bx bx-check\"></i> Motocicletas. </p> <p> <i class=\"bx bx-check\"></i> Seguro Básico Estandarizado. </p> </div> <h3>¿Por qué asesorarse con SOC?:</h3> <ul> <li><strong>Varias opciones:</strong> Tendrás diversas alternativas ya que trabajamos con las mejores compañías de seguros, teniendo un comparativo que permita elegir el seguro que mejor se adecue a tus necesidades</li> <li><strong>Cercanía y servicio:</strong> Contarás con un especialista que dará seguimiento a tus necesidades financieras y de seguros, acompañándote durante la vigencia de tu póliza. Funcionaremos como un enlace con la aseguradora en caso de que por algún siniestro necesites de nosotros.</li> <li><strong>Experiencia:</strong> En SOC estamos asociados con Murguía consultores, uno de los principales bróker de seguros en México y el número 1 en fianzas, brindando todas su experiencia para servirte mejor.</li> </ul>', NULL, '5622ca1b-9e8c-40a4-bd89-e1fc8c18ec73', NULL, NULL, NULL, NULL, NULL),
(21, 5, 'vida-empresas', 'Seguro de vida', NULL, NULL, NULL, NULL, '<p>Como empresario puedes contratar una póliza para todos los miembros de la empresa con sumas aseguradas de acuerdo con las políticas establecidas por la propia compañía. Además, se pueden contratar coberturas adicionales complementarias como muerte accidental, pérdidas orgánicas, pago por invalidez total y permanente.</p> <br> <p>Estos seguros se pueden contratar por experiencia global o por experiencia propia dependiendo el número de asegurados, que por lo general, es a partir de 1,000 empleados.</p> <br> <p>Este producto está dirigido para Pyme (menos de 1000 empleados) y para empresas (más de 1000 empleados).</p>', NULL, 'e90511e6-1793-443b-8220-ae18c03225d5', NULL, NULL, NULL, NULL, NULL),
(22, 5, 'gastos-medicos-mayores-empresas', 'Gastos médicos mayores', NULL, NULL, NULL, NULL, '<p>Están diseñados para brindar certidumbre al momento de enfrentar un evento que ponga en riesgo nuestra salud. Al contar con este plan, tendrás acceso a diferentes servicios y hasta la suma asegurada sin poner en riesgo el patrimonio familiar.</p> <br> <p>Los principales elementos a considerar al contratar un GMM son:</p> <br> <ul> <li>Deducible.</li> <li>Coaseguro.</li> <li>Nivel hospitalario.</li> <li>Suma asegurada.</li> <li>Honorarios quirúrgicos.</li> <li>Beneficio adicional: exención de deducible por accidente o emergencia en el extranjero.</li> </ul>', NULL, 'e90511e6-1793-443b-8220-ae18c03225d5', NULL, NULL, NULL, NULL, NULL),
(23, 5, 'seguros-pyme', 'Seguros PyME', NULL, NULL, NULL, NULL, '<p>Como propietario o arrendatario tienes nuestro apoyo para los momentos difíciles e imprevistos.</p> <br> <h3>Beneficios:</h3> <br> <ul> <li>Protección a tu medida: decide el detalle de protección que deseas para tu negocio; cuentas con la cobertura de incendio o diferentes riesgos de acuerdo con tus necesidades.</li> <li>Daños a terceros: protegemos tu patrimonio, a tus colaboradores y tus clientes de los eventos imprevistos que pudieran ocurrir en tu empresa.</li> <li>Eventos naturales: protegemos tu compañía de fenómenos naturales como huracanes, sismos e inundaciones para que puedas dar continuidad en tu negocio.</li> </ul> <br> <p></p><h3>Opciones de protección:</h3><p></p> <br> <p>Daños: en este plan respaldamos la continuidad de tu negocio al brindarte distintas coberturas que te apoyan ante situaciones inesperadas como daños materiales al inmueble y sus contenidos, sismo, robo y responsabilidad civil, entre otras.</p> <br> <p>Protección a bienes empresariales: obtienes protección en caso de sufrir algún siniestro que afecte tu negocio con soluciones integrales adaptadas a tu operación.</p> <br> <p>Podrás contar con protección flexible de acuerdo con tus necesidades y cuidar la inversión de tu negocio, seas persona física con actividad empresarial o persona moral.</p> <br> <ul> <li>Riesgos nombrados: protege tu negocio contra los daños materiales especificados.</li> <li>Todo riesgo: cubre tu negocio por cualquier daño material siempre que no esté excluido en las condiciones generales.</li> <li>Póliza paquete: además de incendio, cuentas con distintas opciones de protección para que armes el paquete que mejor le convenga a tu negocio.</li> </ul>', NULL, 'e90511e6-1793-443b-8220-ae18c03225d5', NULL, NULL, NULL, NULL, NULL),
(24, 5, 'auto-flotillas', 'Auto flotillas', NULL, NULL, NULL, NULL, '<p>Si te dedicas a administrar la operación de flotillas de autos (de 4 a 200) ya sea para transportar productos o para traslados, cuenta con nuestra protección para tu negocio de acuerdo con tus necesidades.</p> <br> <p>Con auto flotilla empresas (más de 200 unidades) tus autos y camiones están protegidos y cuentan con servicios de asistencia, defensa legal, responsabilidad civil y gastos médicos a ocupantes, entre otros.</p> <br> <p>Planea y protege adecuadamente la inversión de tu empresa anticipándote a los contratiempos que pueda sufrir tu flotilla.</p> <br> <ul> <li>Ahorro de recursos: Evita desembolsos inesperados en caso de accidente o daño a terceros. Protege tus recursos.</li> <li>Asesoría legal: Cuenta con el acompañamiento de nuestro equipo de expertos para orientarte en caso de dudas o juicios legales de temas vehiculares.</li> </ul>', NULL, 'e90511e6-1793-443b-8220-ae18c03225d5', NULL, NULL, NULL, NULL, NULL),
(25, 6, 'auto', 'Adquisición de crédito de auto', NULL, NULL, NULL, NULL, '<p>Es un financiamiento, en moneda nacional, para que adquieras tu auto nuevo o seminuevo de agencia y te olvides de los traslados en transporte</p> <br><br> <p>Beneficios:</p> <ul> <li>Plazos de hasta 72 meses.</li> <li>Enganche desde el 10%. </li> <li>Sin penalización por prepago.</li> <li>Seguro de daños, aceptamos seguros externos(1). </li> <li>Pagos fijos durante la vida del crédito. </li> </ul> <span>(1) Aplica con HSBC</span> <p>Documentación requerida:</p> <ul> <li>Solicitud de Crédito.</li> <li>Identificación Oficial: INE o pasaporte vigente.</li> <li>Comprobante de Domicilio: INE, Teléfono, Luz, Agua o predial. </li> <li>Comprobante de ingresos. </li> </ul> <p>Por qué asesorarse con SOC  :</p> <ul> <li>Asesoría personalizada y sin costo. Además, nos adaptamos al horario que mejor te acomode, ya sea presencial o digital. </li> <li>Profesionalismo y estrategia en cada opción de crédito.</li> <li>Se otorga el financiamiento en relación directa a tus necesidades.</li> <li>Seguridad en el manejo de la información.</li> <li>Te acompañamos durante todo el trámite.</li> </ul>', NULL, 'd5b8238a-5731-4bb0-a491-1abf614cd175', NULL, NULL, NULL, NULL, NULL),
(26, 6, 'sustitucion-auto', 'Sustitución de crédito de auto', NULL, NULL, NULL, NULL, '<p>Mejora las condiciones de tu crédito de auto actual, disminuyendo tu pago mensual o amplía el plazo de pago.  </p> <br><br> <p>Beneficios:</p> <ul> <li>Tasa de interés única y más baja. </li> <li>Disminución de pago mensual y capacidad de pago para otros créditos. </li> <li>Opción de ampliar el plazo del crédito. </li> <li>Sin enganche. </li> <li>Sin penalización por prepago. </li> <li>Seguro de vida sin costo. </li> <li>No se requiere la factura original. </li> <li>Opción de migrar el seguro con AXA o aseguradora externa </li> </ul> <p>Documentación requerida:</p> <ul> <li>Último estado de cuenta (crédito de origen).  </li> <li>Factura en PDF (electrónica) y/o copia legible de la factura original.  </li> <li>Carta de Movilidad (documento HSBC). </li> </ul> <p>Por qué asesorarse con SOC  :</p> <ul> <li>Asesoría personalizada y sin costo. Además, nos adaptamos al horario que mejor te acomode, ya sea presencial o digital. </li> <li>Profesionalismo y estrategia en cada opción de crédito.</li> <li>Se otorga el financiamiento en relación directa a tus necesidades.</li> <li>Seguridad en el manejo de la información.</li> <li>Te acompañamos durante todo el trámite.</li> </ul>', NULL, 'd5b8238a-5731-4bb0-a491-1abf614cd175', NULL, NULL, NULL, NULL, NULL),
(27, 6, 'moto', 'Crédito para moto', NULL, NULL, NULL, NULL, '<p>Podrás adquirir una motocicleta para uso particular, con las mejores marcas, por ejemplo: alta gama, Harley Davidson, BMW, Yamaha, Ducati, Honda, Suzuki, entre otras. </p> <br><br> <p>Beneficios:</p> <ul> <li>Plazos hasta 60 meses.  </li> <li>Monto máximo de crédito de $800 mil pesos.</li> </ul> <p>Documentación requerida:</p> <ul> <li>Solicitud de Crédito.</li> <li>Identificación Oficial: INE o pasaporte vigente.</li> <li>Comprobante de Domicilio: INE, Teléfono, Luz, Agua o predial. </li> <li>Comprobante de ingresos. </li> </ul> <p>Por qué asesorarse con SOC  :</p> <ul> <li>Asesoría personalizada y sin costo. Además, nos adaptamos al horario que mejor te acomode, ya sea presencial o digital. </li> <li>Profesionalismo y estrategia en cada opción de crédito.</li> <li>Se otorga el financiamiento en relación directa a tus necesidades.</li> <li>Seguridad en el manejo de la información.</li> <li>Te acompañamos durante todo el trámite.</li> </ul>', NULL, 'd5b8238a-5731-4bb0-a491-1abf614cd175', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `galeria_bancos`
--
ALTER TABLE `galeria_bancos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `lineas_negocios`
--
ALTER TABLE `lineas_negocios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `galeria_bancos`
--
ALTER TABLE `galeria_bancos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT de la tabla `lineas_negocios`
--
ALTER TABLE `lineas_negocios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
