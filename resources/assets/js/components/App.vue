<template>
    <div id="app">
        <nav class="navbar navbar-dark bg-dark navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <router-link class="navbar-brand" to="/">Головна</router-link>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <router-link class="nav-link" to="/transport">Транспорт</router-link>
                        </li>
                        <li class="nav-item active">
                            <router-link class="nav-link" to="/example">Персонал</router-link>
                        </li>
                        <li class="nav-item active">
                            <router-link class="nav-link" to="/example">Робітники</router-link>
                        </li>
                        <li class="nav-item active">
                            <router-link class="nav-link" to="/example">Цехи</router-link>
                        </li>
                        <li class="nav-item active">
                            <router-link class="nav-link" to="/example">Лабораторії</router-link>
                        </li>

                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Пошук" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Пошук</button>
                    </form>
                </div>

            </div>
        </nav>

        <div class="container">
            <router-view/>
        </div>
    </div>
</template>