PGDMP                     	    w           location    12.0    12.0                0    0    ENCODING    ENCODING     $   SET client_encoding = 'ISO_8859_8';
                      false                       0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false                       0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false                       1262    16393    location    DATABASE     �   CREATE DATABASE location WITH TEMPLATE = template0 ENCODING = 'UTF8' LC_COLLATE = 'French_France.1252' LC_CTYPE = 'French_France.1252';
    DROP DATABASE location;
                postgres    false            �            1259    16654    products    TABLE     d  CREATE TABLE public.products (
    titre character varying(100),
    id integer NOT NULL,
    image character varying(100),
    author character varying(100),
    link character varying(512),
    description character varying(1000),
    categorie character varying(100),
    proprietaire character varying(100),
    prix integer,
    mise_en_ligne date
);
    DROP TABLE public.products;
       public         heap    postgres    false            �            1259    16659 	   pp_id_seq    SEQUENCE     �   CREATE SEQUENCE public.pp_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
     DROP SEQUENCE public.pp_id_seq;
       public          postgres    false    204                       0    0 	   pp_id_seq    SEQUENCE OWNED BY     =   ALTER SEQUENCE public.pp_id_seq OWNED BY public.products.id;
          public          postgres    false    205            �            1259    16631    register    TABLE     D  CREATE TABLE public.register (
    id integer NOT NULL,
    firstname character varying(100),
    lastname character varying(100),
    email character varying(512),
    password character varying(512),
    adresse character varying(100),
    ville character varying(100),
    zip integer,
    pays character varying(100)
);
    DROP TABLE public.register;
       public         heap    postgres    false            �            1259    16629    register_id_seq    SEQUENCE     �   CREATE SEQUENCE public.register_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 &   DROP SEQUENCE public.register_id_seq;
       public          postgres    false    203                       0    0    register_id_seq    SEQUENCE OWNED BY     C   ALTER SEQUENCE public.register_id_seq OWNED BY public.register.id;
          public          postgres    false    202            �
           2604    16661    products id    DEFAULT     d   ALTER TABLE ONLY public.products ALTER COLUMN id SET DEFAULT nextval('public.pp_id_seq'::regclass);
 :   ALTER TABLE public.products ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    205    204            �
           2604    16634    register id    DEFAULT     j   ALTER TABLE ONLY public.register ALTER COLUMN id SET DEFAULT nextval('public.register_id_seq'::regclass);
 :   ALTER TABLE public.register ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    203    202    203                      0    16654    products 
   TABLE DATA           }   COPY public.products (titre, id, image, author, link, description, categorie, proprietaire, prix, mise_en_ligne) FROM stdin;
    public          postgres    false    204   �                 0    16631    register 
   TABLE DATA           g   COPY public.register (id, firstname, lastname, email, password, adresse, ville, zip, pays) FROM stdin;
    public          postgres    false    203   T                  0    0 	   pp_id_seq    SEQUENCE SET     8   SELECT pg_catalog.setval('public.pp_id_seq', 14, true);
          public          postgres    false    205                       0    0    register_id_seq    SEQUENCE SET     =   SELECT pg_catalog.setval('public.register_id_seq', 2, true);
          public          postgres    false    202            �
           2606    16671    products products_pkey 
   CONSTRAINT     T   ALTER TABLE ONLY public.products
    ADD CONSTRAINT products_pkey PRIMARY KEY (id);
 @   ALTER TABLE ONLY public.products DROP CONSTRAINT products_pkey;
       public            postgres    false    204            �
           2606    16639    register register_pkey 
   CONSTRAINT     T   ALTER TABLE ONLY public.register
    ADD CONSTRAINT register_pkey PRIMARY KEY (id);
 @   ALTER TABLE ONLY public.register DROP CONSTRAINT register_pkey;
       public            postgres    false    203               �  x���=o�0���+<u�%��(50
7A/m�&(�$��BRE��K���Po���#�>8�-*e����߾��a��d�D#��I�ѣ�ɿ��,M>�A�{;��J�!8ٌAZ�A��l��q#G�tءsB��۸�7K�E��ek���*��<�����:�3���ք����ô���,�ùڡ#����6XG����8���<���:��Ұ��-�(}���{;������A#�C#��C��;1��8�+^S�yQ�S3F9���M���qs��V�ۀ�v��B���T��qJ�1J 5K�I���31�s��Z؁�v4� �{����0v~9��I{\⻧6Z��h^�iIUƫH���m���"�8 �\�f��3џ�         �   x�e̽
�@ �9�}���I�nSgG�4�I�Z����E����~���<�{Yf Mb!j)�*R�0d���G/~�ҝ��]��'^�'d,9�q凘p���l���!��Ea��}ˤ(�����\(�7��ιUa2�     