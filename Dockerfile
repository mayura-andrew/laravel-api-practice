# Use the official PostgreSQL image as the base image
FROM postgres:13

# Set environment variables for PostgreSQL
ENV POSTGRES_DB abc
ENV POSTGRES_USER root
ENV POSTGRES_PASSWORD password

# Expose the PostgreSQL port (default: 5432)
EXPOSE 5432

# Copy any initialization scripts (optional)
COPY init.sql /docker-entrypoint-initdb.d/

# Add custom configurations (optional)
# COPY postgresql.conf /etc/postgresql/postgresql.conf
# COPY pg_hba.conf /etc/postgresql/pg_hba.conf

# Set the working directory
WORKDIR /var/lib/postgresql/data

# Start PostgreSQL when the container starts
CMD ["postgres"]

