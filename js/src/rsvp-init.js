/**
 * Inicialización y manejo del formulario RSVP
 */

// Variables globales del RSVP
let rsvpState = {
    currentStep: 1,
    selectedGuest: '',
    guestList: [],
    rsvpData: {
        welcome: {},
        ceremony: {},
        reception: {},
        brunch: {}
    }
};

// Configuración de eventos
const rsvpEvents = [
    { id: 'welcome', step: 2, name: 'WELCOME PARTY' },
    { id: 'ceremony', step: 3, name: 'WEDDING DAY - CEREMONY' },
    { id: 'reception', step: 4, name: 'WEDDING DAY - RECEPTION' },
    { id: 'brunch', step: 5, name: 'BEACH DAY' }
];

// Datos de invitados (embebidos directamente)
const invitedGuests = {
    'Migue': ['Fanny', 'Daniel'],
    'Jordyn Horwitz': ['Jordyn Horwitz', 'Jordan Cohen'],
    'Sabrina Zingg': ['Sabrina Zingg'],
    'Jenna Wittich': ['Jenna Wittich'],
    'Matthew Merrigan': ['Matthew Merrigan'],
    'Rachel Horowitz': ['Rachel Horowitz', 'Owen Hynes'],
    'Nur Momani': ['Nur Momani'],
    'Kayla Bozzo': ['Kayla Bozzo', 'Brian Bozzo'],
    'Ryan Engelhardt': ['Ryan Engelhardt'],
    'China Copperstone': ['China Copperstone'],
    'Ariela Waich': ['Ariela Waich', 'Isaac Waich'],
    'Annie Cassius': ['Annie Cassius', 'Jake Kubilliun'],
    'Alexandra Beda': ['Alexandra Beda', 'Jacky Beda'],
    'Megan Corbett': ['Megan Corbett'],
    'Megan Brown': ['Megan Brown'],
    'Katherine Marra': ['Katherine Marra', 'Dylan Dove'],
    'Brittany Berrard': ['Brittany Berrard', 'Austin Krystoff'],
    'Julia Goldman': ['Julia Goldman', 'Drew Buzzell'],
    'Alexandria Gomez': ['Alexandria Gomez', 'Guest'],
    'Gabrielle Katzenelson': ['Gabrielle Katzenelson', 'Steven Cula'],
    'Talia Dagan': ['Talia Dagan', 'Adam Dagan'],
    'Daniela Hanono': ['Daniela Hanono', 'Gabriel Seinjet'],
    'Magdalena Fernández': ['Magdalena Fernández', 'Jose Luis Lagoa'],
    'Estrella Sheff': ['Estrella Sheff', 'Sam Sheff'],
    'Lauren Staton': ['Lauren Staton'],
    'Caroline Krystoff': ['Caroline Krystoff'],
    'Ana Sofia Casado': ['Ana Sofia Casado'],
    'Morgan Wolfe': ['Morgan Wolfe'],
    'Jake Solomon': ['Jake Solomon'],
    'Leo Tarantelli': ['Leo Tarantelli'],
    'Lance Alboucrek': ['Lance Alboucrek'],
    'Wallis Girona': ['Wallis Girona'],
    'Maria Del Rosario Escobar': ['Maria Del Rosario Escobar'],
    'Federico Duque': ['Federico Duque', 'Guillermo Argaez'],
    'Jairo Enrique Duque': ['Jairo Enrique Duque', 'Susana Lubo'],
    'Hector Fernando Jaramillo': ['Hector Fernando Jaramillo', 'Frida Jaramillo'],
    'Lazaro Suarez': ['Lazaro Suarez', 'Ysen Suarez'],
    'Monica Beltran': ['Monica Beltran'],
    'Maria Elena Estrada': ['Maria Elena Estrada', 'Guest'],
    'Mariela Cardona': ['Mariela Cardona', 'Guest'],
    'Norma Garcia': ['Norma Garcia', 'Guest'],
    'Jorge Morales': ['Jorge Morales', 'Merce Benito'],
    'Jerry Williams': ['Jerry Williams', 'Luisa Williams'],
    'Francois McKinnon': ['Francois McKinnon', 'Cristina McKinnon'],
    'Isabella MckInnon': ['Isabella MckInnon'],
    'Sergio Jaramillo': ['Sergio Jaramillo', 'Anair Millan'],
    'Carlos Franco': ['Carlos Franco', 'Patricia Libreros'],
    'Juan D Mejia': ['Juan D Mejia', 'Cristina Forero de Mejia'],
    'Thibault DeCorbiere': ['Thibault DeCorbiere', 'Monica Birlain DeCorbiere'],
    'Armando Birlain': ['Armando Birlain', 'Monica Lopez de Birlain'],
    'Adriana Mejía': ['Adriana Mejía', 'Manuela Mejía', 'Valentina Mejía', 'Salomé Mejía'],
    'Santiago Lopez': ['Santiago Lopez', 'Laura Jimenez'],
    'Celmira Gavilan': ['Celmira Gavilan', 'Hector Gavilan'],
    'Jairo Jimenez': ['Jairo Jimenez', 'Andrea Jimenez'],
    'Alonso Restrepo': ['Alonso Restrepo', 'Margarita Leon Gomez'],
    'Kyle Bulahan': ['Kyle Bulahan'],
    'Jeeva Vankatesh': ['Jeeva Vankatesh'],
    'Jeremy Koch': ['Jeremy Koch'],
    'Aaron Bennett': ['Aaron Bennett', 'Corin Bennett'],
    'Luke Sikinyi': ['Luke Sikinyi', 'Iman Ahmad'],
    'Riley Baker': ['Riley Baker'],
    'Paco Rubio': ['Paco Rubio', 'Olivia Tully'],
    'Ahmad Usmani': ['Ahmad Usmani'],
    'Mikey Nunbhakdi': ['Mikey Nunbhakdi'],
    'Louis Falisse': ['Louis Falisse', 'Camille Farge'],
    'Gabriel Gutierrez': ['Gabriel Gutierrez', 'Andrea Bruce'],
    'Ben Yurchak': ['Ben Yurchak'],
    'Patrick Peterson': ['Patrick Peterson', 'Kate Aseltine'],
    'Blake Strickland': ['Blake Strickland'],
    'Duo Zheng': ['Duo Zheng'],
    'Dave Taylor': ['Dave Taylor'],
    'David Sanchez': ['David Sanchez'],
    'Chris Bond': ['Chris Bond', 'Haley Magar'],
    'Matthew Brady': ['Matthew Brady'],
    'Lorenzo Giordano': ['Lorenzo Giordano', 'Julia Ray'],
    'Jose Escobar': ['Jose Escobar', 'Claudia Alvarez'],
    'Lele Gomez': ['Lele Gomez'],
    'Jaime Alvarez': ['Jaime Alvarez', 'Kim Alvarez', 'Sofia Alvarez', 'Olivia Alvarez'],
    'Zach Estrada': ['Zach Estrada'],
    'Bob Estrada': ['Bob Estrada'],
    'Alejandro Ramos': ['Alejandro Ramos'],
    'Wallis Escobar': ['Wallis Escobar'],
    'Laura Escobar': ['Laura Escobar', 'Dov Turner'],
    'Maria Jose Ramos': ['Maria Jose Ramos'],
    'Andrea Diaz': ['Andrea Diaz', 'Mikey Diaz'],
    'Von Cannady': ['Von Cannady'],
    'Guy Alteme': ['Guy Alteme', 'Albania Aquino'],
    'Vadim Serebrinskiy': ['Vadim Serebrinskiy', 'Nicole Wojto'],
    'Randell Pierre-Louis': ['Randell Pierre-Louis'],
    'Nico Baldwin': ['Nico Baldwin', 'Ais Coffee'],
    'Eduardo Hauser': ['Eduardo Hauser', 'María Inés Hauser'],
    'José Aldeanueva': ['José Aldeanueva', 'Adriana Hauser'],
    'Nicolás Aldeanueva': ['Nicolás Aldeanueva', 'Guest'],
    'Cristina Aldeanueva': ['Cristina Aldeanueva', 'Guest'],
    'Carlos Torrealba': ['Carlos Torrealba', 'Magdalena Zozaya', 'Isabella Torrealba', 'Magdalena Torrealba'],
    'Carlos Edery': ['Carlos Edery'],
    'Feliciano González': ['Feliciano González'],
    'Elisa Elena Zozaya': ['Elisa Elena Zozaya'],
    'Victor Enrique Padula': ['Victor Enrique Padula', 'Clara Herrero'],
    'Juan Ignacio Padula': ['Juan Ignacio Padula', 'Guest'],
    'Elisa Eugenia Padula': ['Elisa Eugenia Padula'],
    'Elisa Basalo de Zozaya': ['Elisa Basalo de Zozaya'],
    'José Antonio Zozaya': ['José Antonio Zozaya', 'Vanessa Trutschel', 'José Andres Zozaya', 'Julieta Zozaya'],
    'Henry Alamo': ['Henry Alamo'],
    'Ignacio Arcaya': ['Ignacio Arcaya', 'Susana Arcaya', 'Ignacio Luis Arcaya', 'Valentina Arcaya', 'Carolina Arcaya'],
    'Francisco Arocha': ['Francisco Arocha', 'María Cecilia Arocha'],
    'Uri Benhamron': ['Uri Benhamron', 'Vanessa Benhamron', 'Anabella Benhamron', 'Andrea Benhamron', 'David Benhamron'],
    'Nelson Eduardo Bocaranda': ['Nelson Eduardo Bocaranda', 'Alejandra Machado'],
    'Nelson Bocaranda Sardi': ['Nelson Bocaranda Sardi', 'Bolivia Bocaranda'],
    'Alberto Capriles': ['Alberto Capriles', 'Evelyn Capriles'],
    'Martín Capriles': ['Martín Capriles', 'Andreina Capriles'],
    'Mariana Carnevali': ['Mariana Carnevali'],
    'Gilberto Carrasquero': ['Gilberto Carrasquero', 'Guest'],
    'Mario Ciaffi': ['Mario Ciaffi', 'Ana María Pinedo'],
    'Luis De Armas': ['Luis De Armas', 'Gloria De Armas'],
    'Diego Domínguez': ['Diego Domínguez', 'Valentina Domínguez'],
    'Alí Domínguez': ['Alí Domínguez', 'Alejandra Arrieta de Domínguez'],
    'Carlos E. Domínguez': ['Carlos E. Domínguez', 'María Altagracia Domínguez'],
    'Elisabeth Eljuri': ['Elisabeth Eljuri', 'Gustavo Prévide'],
    'Ana Teresa Fabregas': ['Ana Teresa Fabregas', 'Guest'],
    'Diego Fernández': ['Diego Fernández', 'Alexandra Padrón de Fernandéz'],
    'Luis Eduardo Ferreira': ['Luis Eduardo Ferreira', 'Claudia Pagazani'],
    'Eric Finkelberg': ['Eric Finkelberg', 'Donna Zalter'],
    'Juan Carlos García': ['Juan Carlos García', 'Alejandra García', 'Juanita García', 'Emilia García'],
    'Daniel García': ['Daniel García', 'Mary Angulo de García'],
    'Luis Emilio Gómez': ['Luis Emilio Gómez', 'Alicia Pantin'],
    'Klaus Grau': ['Klaus Grau', 'Catalina Grau', 'Stefy Grau', 'Sophia Grau', 'Isabella Grau', 'Nikky Grau'],
    'Alejandro Grisanti': ['Alejandro Grisanti', 'Cristina Bocaranda'],
    'Fernando Guardazzi': ['Fernando Guardazzi', 'Lorena Guardazzi'],
    'Erik Halvorssen': ['Erik Halvorssen', 'Alejandra Halvorssen'],
    'Juan Pablo Larrazabal': ['Juan Pablo Larrazabal', 'Anabel Simón'],
    'Adriana López': ['Adriana López', 'Luis Eduardo Paúl'],
    'Andreina Massó': ['Andreina Massó'],
    'James Mathison': ['James Mathison', 'Beatriz Alemán'],
    'Luis Matos': ['Luis Matos', 'Francis Pimentel de Matos'],
    'Kevin Merrigan': ['Kevin Merrigan', 'Mariette Merrigan'],
    'Iván Morales': ['Iván Morales', 'María Corina Cornago'],
    'Randolph Morrison': ['Randolph Morrison', 'Elisa Bazó de Morrison'],
    'Norman Morrison': ['Norman Morrison', 'Gloriana Castro de Morrison'],
    'Athina Morrison': ['Athina Morrison', 'Guest'],
    'Andrés Mujica': ['Andrés Mujica', 'Mariana Frías de Mujica'],
    'Diana Mundlak': ['Diana Mundlak', 'Daniel Mundlak'],
    'Gerardo Pacanins': ['Gerardo Pacanins', 'Carolina Pacanins'],
    'Gonzalo Parra': ['Gonzalo Parra', 'Vanessa Parra'],
    'Robert Pearl': ['Robert Pearl', 'Leoni Pearl'],
    'Nicolás Pereira': ['Nicolás Pereira', 'María Fernanda De Armas'],
    'Marco Petrica': ['Marco Petrica', 'Anelisse Petrica'],
    'Alberto Poleo': ['Alberto Poleo', 'Beatriz Poleo'],
    'Julio Riquezes': ['Julio Riquezes', 'Amaya Aristoy'],
    'Francisco Rodríguez': ['Francisco Rodríguez', 'Helena De Castro', 'Juan Andrés Rodríguez'],
    'Carlos Enrique Rodríguez': ['Carlos Enrique Rodríguez', 'Estefanía Velazco de Rodríguez'],
    'Francisco Eduardo Rodríguez': ['Francisco Eduardo Rodríguez'],
    'Ricardo Rodríguez': ['Ricardo Rodríguez', 'Ana Cecilia Morales'],
    'Tony Roye': ['Tony Roye', 'Anabella Alamo'],
    'Juan Sabater': ['Juan Sabater', 'Mariana Sabater'],
    'Leonardo Simón': ['Leonardo Simón', 'Clementina Simón', 'Nicolas Simón', 'Leonardo Simón Jr.'],
    'Ana Elena Simón': ['Ana Elena Simón', 'Matt Beninati'],
    'Eduardo Simón': ['Eduardo Simón', 'María Eugenia Simón'],
    'Carlos Enrique Simón': ['Carlos Enrique Simón', 'Daniela Weffer de Simón'],
    'Ana María Sosa': ['Ana María Sosa', 'Rodrigo Aguiar', 'Alonso Aguiar', 'Ana Federica Aguiar'],
    'Jose Luis Suárez': ['Jose Luis Suárez', 'Maribel Suárez'],
    'Juan Manuel Sucre': ['Juan Manuel Sucre', 'Cielo Sucre'],
    'Alejandro Tabosky': ['Alejandro Tabosky', 'Guest'],
    'Rafael Torrealba': ['Rafael Torrealba', 'Ariana Benítez'],
    'María José Torrealba': ['María José Torrealba'],
    'Roberto Trutschel': ['Roberto Trutschel', 'Elsa Trutschel'],
    'Daniel Vielleville': ['Daniel Vielleville', 'Guest'],
    'Marisela Vizcarrondo': ['Marisela Vizcarrondo', 'Guest'],
    'David Weisinger': ['David Weisinger', 'Galit Weisinger'],
    'Enrique Weisson': ['Enrique Weisson', 'Marité Suárez de Weisson'],
    'Luisa Helena Wilson': ['Luisa Helena Wilson'],
    'Peter Wittich': ['Peter Wittich', 'Denise Wittich'],
    'Alejandro Yanes': ['Alejandro Yanes', 'María Fernanda de Yanes'],
    'Leonardo Zingg': ['Leonardo Zingg', 'Irene Zingg'],
    'Simon Zisman': ['Simon Zisman', 'Carolina Zisman', 'Isabella Zisman', 'Clarissa Zisman'],
    'Woods Staton': ['Woods Staton', 'Erica Staton'],
};

/**
 * Funciones principales del RSVP
 */
export function initRSVPForm() {
    
    // Elementos DOM
    const rsvpContainer = document.getElementById('rsvp-form-container');
    const searchInput = document.getElementById('guest-search');
    const searchResults = document.getElementById('search-results');
    const allergyInput = document.getElementById('allergies');
    const emailInput = document.getElementById('guest-email');
    const phoneInput = document.getElementById('guest-phone');
    const dateInput = document.getElementById('guest-date');
    const closeButton = document.querySelector('.rsvp-form-close');
    
    if (!rsvpContainer) {
        return;
    }
    
    // Event listeners principales
    setupRSVPEventListeners();
    
    // Event listener directo para el botón de cerrar
    if (closeButton) {
        closeButton.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            closeRSVPForm();
        });
    }
    
    // Búsqueda automática al escribir y con Enter
    if (searchInput) {
        // Búsqueda automática al escribir (input event)
        searchInput.addEventListener('input', function(e) {
            searchGuests();
        });
        
        // Búsqueda con Enter en el campo
        searchInput.addEventListener('keypress', function(e) {
            if (e.key === 'Enter' || e.keyCode === 13) {
                e.preventDefault();
                findInvitation();
            }
        });
    }
    
}

function setupRSVPEventListeners() {
    // Event listeners mediante delegación de eventos
    document.addEventListener('click', function(e) {
        // Abrir formulario RSVP
        if (e.target.matches('.rsvp-open-btn')) {
            e.preventDefault();
            openRSVPForm();
        }
        
        // Cerrar formulario - verificar tanto el botón como el span interno
        if (e.target.matches('.rsvp-form-close') || e.target.closest('.rsvp-form-close')) {
            e.preventDefault();
            closeRSVPForm();
        }
        
        // Cerrar al hacer click en el overlay de fondo
        if (e.target.matches('#rsvp-form-container')) {
            closeRSVPForm();
        }
        
        // Botón home (cerrar modal)
        if (e.target.matches('.rsvp-home-btn')) {
            closeRSVPForm();
        }
        
        // Botón siguiente
        if (e.target.matches('.rsvp-next-btn')) {
            nextStep();
        }
        
        // Botón anterior
        if (e.target.matches('.rsvp-back-btn')) {
            previousStep();
        }
        
        // Botón buscar invitación
        if (e.target.matches('.rsvp-find-btn')) {
            findInvitation();
        }
    });
}

// Abrir formulario RSVP
function openRSVPForm() {
    const rsvpContainer = document.getElementById('rsvp-form-container');
    
    // Verificar si Bootstrap está disponible
    if (typeof bootstrap !== 'undefined' && bootstrap.Modal) {
        const modal = new bootstrap.Modal(rsvpContainer);
        modal.show();
    } else {
        // Fallback para cuando Bootstrap no esté disponible
        rsvpContainer.style.display = 'block';
        rsvpContainer.classList.add('show');
        document.body.style.overflow = 'hidden';
    }
    showStep(1);
}

// Cerrar formulario RSVP
function closeRSVPForm() {
    const rsvpContainer = document.getElementById('rsvp-form-container');
    
    if (!rsvpContainer) {
        return;
    }
    
    
    // Verificar si Bootstrap está disponible
    if (typeof bootstrap !== 'undefined' && bootstrap.Modal) {
        const modal = bootstrap.Modal.getInstance(rsvpContainer);
        if (modal) {
            modal.hide();
        }
    } else {
        // Fallback para cuando Bootstrap no esté disponible
        rsvpContainer.style.display = 'none';
        rsvpContainer.classList.remove('show');
        document.body.style.overflow = 'auto';
    }
    resetForm();
}

// Resetear formulario
function resetForm() {
    rsvpState.currentStep = 1;
    rsvpState.selectedGuest = '';
    rsvpState.guestList = [];
    rsvpState.rsvpData = {
        welcome: {},
        ceremony: {},
        reception: {},
        brunch: {}
    };
    
    const searchInput = document.getElementById('guest-search');
    const searchResults = document.getElementById('search-results');
    const allergyInput = document.getElementById('allergies');
    const emailInput = document.getElementById('guest-email');
    const phoneInput = document.getElementById('guest-phone');
    const dateInput = document.getElementById('guest-date');
    
    if (searchInput) searchInput.value = '';
    if (searchResults) {
        searchResults.style.display = 'none';
        searchResults.innerHTML = '';
    }
    if (allergyInput) allergyInput.value = '';
    if (emailInput) emailInput.value = '';
    if (phoneInput) phoneInput.value = '';
    if (dateInput) dateInput.value = '';
}

// Mostrar paso específico
function showStep(step) {
    document.querySelectorAll('.rsvp-form-step').forEach(el => {
        el.classList.remove('active');
    });
    
    const stepElement = document.getElementById(`step-${step}`);
    if (stepElement) {
        stepElement.classList.add('active');
    }
    
    rsvpState.currentStep = step;
    
    // Configurar paso específico
    if (step >= 2 && step <= 5) {
        const event = rsvpEvents.find(e => e.step === step);
        if (event) {
            setupEventStep(event.id);
        }
    } else if (step === 6) {
        setupAdditionalInfoStep();
    }
}

// Búsqueda automática de invitados
function searchGuests() {
    const searchInput = document.getElementById('guest-search');
    const searchResults = document.getElementById('search-results');
    const query = searchInput.value.toLowerCase().trim();
    
    // Ocultar resultados si hay menos de 3 caracteres
    if (query.length < 3) {
        searchResults.style.display = 'none';
        return;
    }
    
    const allMainGuests = Object.keys(invitedGuests);
    let foundMainGuests = new Set(); // Para evitar duplicados
    
    // Buscar coincidencias exactas en nombres principales
    const exactMatches = allMainGuests.filter(name => {
        if (name.toLowerCase() === query) {
            foundMainGuests.add(name);
            return true;
        }
        return false;
    });
    
    // Buscar nombres que empiecen con la consulta
    const startsWithMatches = allMainGuests.filter(name => {
        if (!foundMainGuests.has(name) && name.toLowerCase().startsWith(query)) {
            foundMainGuests.add(name);
            return true;
        }
        return false;
    });
    
    // Buscar nombres que contengan la consulta
    const containsMatches = allMainGuests.filter(name => {
        if (!foundMainGuests.has(name) && name.toLowerCase().includes(query)) {
            foundMainGuests.add(name);
            return true;
        }
        return false;
    });
    
    // Buscar también en la lista de invitados de cada grupo
    allMainGuests.forEach(mainGuest => {
        if (!foundMainGuests.has(mainGuest)) {
            const guestList = invitedGuests[mainGuest];
            const hasMatchingGuest = guestList.some(guest => {
                const guestName = guest.toLowerCase();
                return guestName === query || 
                       guestName.startsWith(query) || 
                       guestName.includes(query);
            });
            if (hasMatchingGuest) {
                foundMainGuests.add(mainGuest);
                containsMatches.push(mainGuest);
            }
        }
    });
    
    // Combinar resultados por prioridad y limitar a 6 resultados máximo
    const matches = [...exactMatches, ...startsWithMatches, ...containsMatches].slice(0, 6);
    
    // Mostrar resultados automáticamente
    if (matches.length > 0) {
        searchResults.innerHTML = matches.map(name => 
            `<div class="rsvp-search-item cursor-pointer" onclick="selectGuest('${name}')">${name}</div>`
        ).join('');
        searchResults.style.display = 'block';
    } else {
        searchResults.innerHTML = '<div class="rsvp-search-item">No guest found with that name</div>';
        searchResults.style.display = 'block';
    }
}

// Función para buscar invitación desde el botón
function findInvitation() {
    const searchInput = document.getElementById('guest-search');
    const searchResults = document.getElementById('search-results');
    const inputValue = searchInput.value.trim();
    
    if (inputValue.length < 3) {
        alert('Please enter at least 3 characters of your name');
        return;
    }
    
    const query = inputValue.toLowerCase();
    const allMainGuests = Object.keys(invitedGuests);
    let foundMainGuests = new Set(); // Para evitar duplicados
    
    // Buscar coincidencias exactas en nombres principales
    const exactMatches = allMainGuests.filter(name => {
        if (name.toLowerCase() === query) {
            foundMainGuests.add(name);
            return true;
        }
        return false;
    });
    
    // Buscar nombres que empiecen con la consulta
    const startsWithMatches = allMainGuests.filter(name => {
        if (!foundMainGuests.has(name) && name.toLowerCase().startsWith(query)) {
            foundMainGuests.add(name);
            return true;
        }
        return false;
    });
    
    // Buscar nombres que contengan la consulta
    const containsMatches = allMainGuests.filter(name => {
        if (!foundMainGuests.has(name) && name.toLowerCase().includes(query)) {
            foundMainGuests.add(name);
            return true;
        }
        return false;
    });
    
    // Buscar también en la lista de invitados de cada grupo
    allMainGuests.forEach(mainGuest => {
        if (!foundMainGuests.has(mainGuest)) {
            const guestList = invitedGuests[mainGuest];
            const hasMatchingGuest = guestList.some(guest => {
                const guestName = guest.toLowerCase();
                return guestName === query || 
                       guestName.startsWith(query) || 
                       guestName.includes(query);
            });
            if (hasMatchingGuest) {
                foundMainGuests.add(mainGuest);
                containsMatches.push(mainGuest);
            }
        }
    });
    
    // Combinar resultados por prioridad y limitar a 6 resultados máximo
    const matches = [...exactMatches, ...startsWithMatches, ...containsMatches].slice(0, 6);
    
    if (matches.length > 0) {
        searchResults.innerHTML = matches.map(name => 
            `<div class="rsvp-search-item cursor-pointer" onclick="selectGuest('${name}')">${name}</div>`
        ).join('');
        searchResults.style.display = 'block';
    } else {
        searchResults.innerHTML = '<div class="rsvp-search-item">No guest found with that name</div>';
        searchResults.style.display = 'block';
    }
}

// Seleccionar invitado - función global para onclick
window.selectGuest = function(guestName) {
    const searchInput = document.getElementById('guest-search');
    const searchResults = document.getElementById('search-results');
    
    rsvpState.selectedGuest = guestName;
    rsvpState.guestList = invitedGuests[guestName] || [];
    searchInput.value = guestName;
    searchResults.style.display = 'none';
    
    // Inicializar datos RSVP para cada evento
    rsvpState.guestList.forEach(guest => {
        rsvpState.rsvpData.welcome[guest] = 'pending';
        rsvpState.rsvpData.ceremony[guest] = 'pending';
        rsvpState.rsvpData.reception[guest] = 'pending';
        rsvpState.rsvpData.brunch[guest] = 'pending';
    });
    
    showStep(2);
};

// Configurar paso de evento específico
function setupEventStep(eventId) {
    const container = document.getElementById(`guest-list-${eventId}`);
    if (!container) return;
    
    let html = '';
    
    rsvpState.guestList.forEach((guest, index) => {
        html += `
            <div class="rsvp-guest-item" data-guest-index="${index}">
                <div class="row">
                    <div class="d-flex align-items-center col-12 col-xl-5">
                        <div class="rsvp-guest-name fs-5 font-base">${guest}</div>
                    </div>
                    <div class="col-12 col-xl-7">
                        <div class="mb-2">
                            <div class="row">
                                <div class="col-12 col-xl-6 mb-xl-0 mb-2">
                                    <button type="button" class="rsvp-btn w-100 border-1 font-base py-2 px-2 fs-6" data-guest-name="${guest}" data-response="accept" data-event="${eventId}">Accept</button>
                                </div>
                                <div class="col-12 col-xl-6">
                                    <button type="button" class="rsvp-btn rsvp-btn-outline rsvp-btn w-100 border-1 font-base fs-6 py-2 px-2" data-guest-name="${guest}" data-response="decline" data-event="${eventId}">Decline</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        `;
    });
    
    container.innerHTML = html;
    
    // Agregar event listeners a los botones
    const responseButtons = container.querySelectorAll('.rsvp-btn');
    responseButtons.forEach(btn => {
        btn.addEventListener('click', function() {
            const guestName = this.getAttribute('data-guest-name');
            const response = this.getAttribute('data-response');
            const event = this.getAttribute('data-event');
            setGuestResponse(guestName, response, event);
        });
    });
    
    updateEventButtons(eventId);
}

// Configurar paso de información adicional
function setupAdditionalInfoStep() {
    const allergyInput = document.getElementById('allergies');
    const emailInput = document.getElementById('guest-email');
    const phoneInput = document.getElementById('guest-phone');
    const dateInput = document.getElementById('guest-date');
    
    // Solo necesita asegurar que los elementos existen
    if (allergyInput) allergyInput.value = allergyInput.value || '';
    if (emailInput) emailInput.value = emailInput.value || '';
    if (phoneInput) phoneInput.value = phoneInput.value || '';
    if (dateInput) dateInput.value = dateInput.value || '';
}

// Establecer respuesta del invitado
function setGuestResponse(guestName, response, eventId) {
    rsvpState.rsvpData[eventId][guestName] = response;
    updateEventButtons(eventId);
}

// Actualizar botones de evento específico
function updateEventButtons(eventId) {
    
    const container = document.getElementById(`guest-list-${eventId}`);
    if (!container) return;
    
    // Primero resetear todos los botones del evento
    const allButtons = container.querySelectorAll('.rsvp-btn');
    allButtons.forEach(btn => {
        btn.classList.remove('active');
        btn.style.backgroundColor = '';
        btn.style.color = '';
        btn.style.borderColor = '';
        btn.style.opacity = '';
        
        // Restaurar estilos por defecto según el tipo de botón
        const isDeclineBtn = btn.getAttribute('data-response') === 'decline';
        
        if (isDeclineBtn) {
            // Botones "Decline" - estilo outline por defecto
            btn.style.backgroundColor = 'transparent';
            btn.style.color = '#B8724C';
            btn.style.borderColor = '#B8724C';
        } else {
            // Botones "Accept" - estilo filled por defecto
            btn.style.backgroundColor = '#B8724C';
            btn.style.color = '#fff';
            btn.style.borderColor = '#B8724C';
        }
    });
    
    // Luego marcar los botones seleccionados para este evento
    Object.keys(rsvpState.rsvpData[eventId]).forEach(guest => {
        const response = rsvpState.rsvpData[eventId][guest];
        if (response === 'pending') return;
        
        // Buscar los botones de este invitado para este evento
        const buttons = container.querySelectorAll(`[data-guest-name="${guest}"][data-event="${eventId}"]`);
        
        buttons.forEach(btn => {
            const btnResponse = btn.getAttribute('data-response');
            
            const isDeclineBtn = btnResponse === 'decline';
            
            if (btnResponse === response) {
                // Marcar como activo/seleccionado
                btn.classList.add('active');
                
                if (isDeclineBtn) {
                    // Decline seleccionado - fondo rojo
                    btn.style.backgroundColor = '#858B70';
                    btn.style.color = '#fff';
                    btn.style.borderColor = '#858B70';
                } else {
                    // Accept seleccionado - fondo verde
                    btn.style.backgroundColor = '#B8724C';
                    btn.style.color = '#fff';
                    btn.style.borderColor = '#B8724C';
                }
                btn.style.opacity = '1';
            } else {
                // Marcar como inactivo/no seleccionado
                btn.style.opacity = '0.4';
                
                if (isDeclineBtn) {
                    // Decline no seleccionado
                    btn.style.backgroundColor = 'transparent';
                    btn.style.color = '#B8724C';
                    btn.style.borderColor = '#B8724C';
                } else {
                    // Accept no seleccionado
                    btn.style.backgroundColor = '#B8724C';
                    btn.style.color = '#fff';
                    btn.style.borderColor = '#B8724C';
                }
            }
        });
    });
}

// Validar si se puede continuar
function canContinue() {
    // Para eventos (pasos 2-5): Siempre se puede continuar (no es obligatorio responder)
    if (rsvpState.currentStep >= 2 && rsvpState.currentStep <= 5) {
        return true;
    }
    // Para información adicional: Email y teléfono son obligatorios
    if (rsvpState.currentStep === 6) {
        const emailInput = document.getElementById('guest-email');
        const phoneInput = document.getElementById('guest-phone');
        return emailInput && emailInput.value.trim() !== '' && 
               phoneInput && phoneInput.value.trim() !== '';
    }
    return true;
}

// Ir al siguiente paso
function nextStep() {
    if (!canContinue()) {
        alert('Por favor complete todos los campos requeridos');
        return;
    }
    
    if (rsvpState.currentStep === 6) {
        submitRSVP();
    } else {
        showStep(rsvpState.currentStep + 1);
    }
}

// Ir al paso anterior
function previousStep() {
    if (rsvpState.currentStep > 1) {
        showStep(rsvpState.currentStep - 1);
    }
}

// Enviar RSVP
function submitRSVP() {
    const allergyInput = document.getElementById('allergies');
    const emailInput = document.getElementById('guest-email');
    const phoneInput = document.getElementById('guest-phone');
    const dateInput = document.getElementById('guest-date');
    
    // Procesar respuestas finales (pending = accept por defecto)
    const processedData = {};
    Object.keys(rsvpState.rsvpData).forEach(eventId => {
        processedData[eventId] = {};
        Object.keys(rsvpState.rsvpData[eventId]).forEach(guest => {
            // Si no respondió (pending), se asume que va (accept)
            processedData[eventId][guest] = rsvpState.rsvpData[eventId][guest] === 'pending' ? 'accept' : rsvpState.rsvpData[eventId][guest];
        });
    });
    
    const submitData = {
        action: 'submit_rsvp',
        guest_name: rsvpState.selectedGuest,
        guests: processedData,
        allergies: allergyInput.value.trim(),
        email: emailInput.value.trim(),
        phone: phoneInput.value.trim(),
        arrival_date: dateInput.value.trim()
    };
    
    // Mostrar loading
    document.getElementById('step-6').innerHTML = '<div class="rsvp-loading">Enviando...</div>';
    
    // Construir body correctamente
    const formData = new FormData();
    formData.append('action', 'submit_rsvp');
    formData.append('guest_name', rsvpState.selectedGuest);
    formData.append('email', emailInput.value.trim());
    formData.append('phone', phoneInput.value.trim());
    formData.append('arrival_date', dateInput.value.trim());
    formData.append('allergies', allergyInput.value.trim());
    formData.append('guests', JSON.stringify(processedData));
    
    // Debug: Mostrar lo que se va a enviar
    // for (let [key, value] of formData.entries()) {
    //     // Log entries
    // }
    
    // Debug: Verificar JSON antes de enviar
    const jsonString = JSON.stringify(processedData);
    
    fetch(window.location.href, {
        method: 'POST',
        body: formData
    })
    .then(response => {
        if (!response.ok) {
            throw new Error(`HTTP error! status: ${response.status}`);
        }
        return response.text(); // Primero como texto para debugging
    })
    .then(text => {
        const data = JSON.parse(text);
        if (data.success) {
            showStep(7);
        } else {
            alert('Error al enviar RSVP: ' + data.message);
            // Regenerar el paso 6 sin el loading
            showStep(6);
            setupAdditionalInfoStep();
        }
    })
    .catch(error => {
        // En local, simular éxito para testing
        if (window.location.hostname === 'localhost' || window.location.hostname === '127.0.0.1') {
            alert('MODO LOCAL: RSVP procesado (revisa la consola para ver los datos)');
            showStep(7);
        } else {
            alert('Error al enviar RSVP');
            showStep(6);
        }
    });
}

 